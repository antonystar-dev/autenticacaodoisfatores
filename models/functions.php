<?php

function enviaEmail()
{

    global $conn;
    global $emailRecuperacao;
    global $mensagemEmail;
    global $mensagemAssunto;
    global $id2;
    //$nome = $nomeUsuario;

    if (empty($_SESSION["nome"])) {
        $sql = "SELECT id, nome FROM usuarios WHERE email='$emailRecuperacao'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


                $nome = $row["nome"];
                $destinatario = $emailRecuperacao;
            }

        }
        //$conn->close();
    } else {

        $nome = $_SESSION["nome"];
        $destinatario = $_SESSION["email"];
    }


    $emaildoservidor = "no-reply@antonystar.com";
    //$emaildoservidor = "noreply@antony-star.com";
    $assunto = $mensagemAssunto;

    $body = "===================================" . "\n";
    $body = $body . "Autenticação de dois fatores" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Assunto: " . $assunto . "\n";
    $body = $body . $mensagemEmail . "\n";

    $body = $body . "===================================" . "\n";
    //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // envia o email
    mail($destinatario, $assunto, $body, "From: $emaildoservidor\r\n");
}
function alertaPositivo()
{
    global $msg;
    echo "<script>localStorage.setItem('mensagemPositiva', '$msg');</script>";
    header("Refresh: 0;url=''");
}
function alertaNegativo()
{
    global $msg;
    echo "<script>localStorage.setItem('mensagemNegativa', '$msg');</script>";
    header("Refresh: 0;url='../'");
}

function linkTemporario()
{
    //require_once '../models/conexao/banco.php';
    global $conn;
    global $link;
    global $idsessao;
    global $emailRecuperacao;
    echo $emailRecuperacao;
    if (empty($_SESSION["id"])) {
        $sql = "SELECT id, nome FROM usuarios WHERE email='$emailRecuperacao'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $id = $row["id"];
                $nomeUsuario = $row["nome"];
            }

        }
        //$conn->close();
    } else {
        $id = $_SESSION["id"];
        $nomeUsuario = $_SESSION["nome"];
    }

    $link = sha1(rand(1000, 9999));
    $idsessao = session_id();

    $SessaoID = "UPDATE usuarios SET link_temp='$idsessao' WHERE id=$id ";
    if ($conn->query($SessaoID) === TRUE) {
        //echo "enviou";
    } else {
        echo "não enviou";
    }

    //$conn->close();
    global $original;
    $temporario = "../temp/$link.php";
    !copy($original, $temporario);

}
function codigoExpirado()
{
    global $conn;
    //require '../models/conexao/banco.php';
    $id = $_GET["id"];
    $sql = "SELECT cod_temp, dir_temp FROM usuarios WHERE link_temp='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $codtemp = $row["cod_temp"];
            $dirtemp = $row["dir_temp"];

            if ($dirtemp != "EXPIRADO") {
                unlink("../../temp/$dirtemp/$dirtemp.php");
                rmdir("../../temp/$dirtemp/");
            }


        }
    } else {
        echo "não carregou";
    }
    $sql = "UPDATE usuarios SET cod_temp='EXPIRADO', dir_temp='EXPIRADO', link_temp='EXPIRADO' WHERE link_temp='$id'";

    if ($conn->query($sql) === TRUE) {
        //echo "Código Expirado";


    } else {
        echo "deu erro " . $conn->error;
    }
    //header("Refresh: 1;url=geralink.php");
    //$conn->close();

}
function geraCodigo()
{
    global $conn;
    global $codigo;
    //require '../../models/conexao/banco.php';
    $id = $_GET["id"];
    $codigo = rand(100000, 999999);




    $sql = "UPDATE usuarios SET cod_temp=md5($codigo) WHERE link_temp='$id'";

    if ($conn->query($sql) === TRUE) {

        header("Refresh: 10;url=../../view/msg/expirado.php?id=$id");

    } else {
        echo "deu erro " . $conn->error;
    }



    //$conn->close();

}
function novaSenha()
{
    global $conn;

    // require '../models/conexao/banco.php';
    $idtemp = $_GET["id"];
    $sql = "SELECT link_temp FROM usuarios WHERE link_temp='$idtemp'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $sql = "SELECT id FROM usuarios WHERE link_temp='$idtemp'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $id = $row["id"];

                }

            }

        }

    } else {
        header("Refresh: 0;url='../view/msg/email-expirado.php");
    }


}
function confirmaLogin()
{
    global $conn;
    global $msg;

    // require '../models/conexao/banco.php';
    $id = $_GET["id"] ?? null;
    if ($id != null) {
        $sql = "UPDATE usuarios SET situacao='1' WHERE link_temp='$id'";

        if ($conn->query($sql) === TRUE) {

            $msg="Endereço de e-mail confirmado com sucesso";

        } else {
            echo "deu erro " . $conn->error;
        }
    }else{
        echo "";
        $msg="Chave expirada, solicite um novo email com o link";
    }
}
function situacaoLogin()
{
    global $conn;
    global $situacaoPerfil;
    global $idverificador;
    $idverificador = $_SESSION['id'] ?? null;
    $sql = "SELECT situacao FROM usuarios WHERE id='$idverificador'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $situacaoPerfil = $row["situacao"];
        }

    }
}
function bloqueiosPerfil()
{
    global $situacaoPerfil;
    global $situacao;
    global $emailconf;

    switch ($situacaoPerfil) {

        case "2":
            $situacao = "Conta excluida a pedido do usuario";
            $emailconf = "Saiba mais";
            break;
        case "3":
            $situacao = "Conta excluida por suspeita de golpe";
            $emailconf = "Saiba mais";
            break;
        default:
            $situacao = "Por favor, verifique o seu endereço de e-mail para validação do cadastro";
            $emailconf = "<a href='../../controller/confirmaEmail.php'>Confirmar email</a><h3 class='mensagemAlerta'>após a confirmação do e-mail será necessario a atualização da pagina</h3>";

    }

}

?>