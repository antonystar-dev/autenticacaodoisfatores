<?php
if (is_file('../models/conexao/banco.php')) {
    require_once '../models/conexao/banco.php';
} else {
    require_once './models/conexao/banco.php';
}
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

?>