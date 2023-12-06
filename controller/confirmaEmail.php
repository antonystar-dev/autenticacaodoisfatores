<?php
session_start();
if (is_file('ponte.php')) {
    require_once 'ponte.php';
}




if ($_SESSION["email"] != null) {
    echo $email = $_SESSION['email'];
    //aqui eu chamo a função de geralção de link aleatorio;
    $emailRecuperacao = $email;
    $original = "../session/validaEmail.php";
    linkTemporario();
    $id=session_id();
    $servidor = $_SERVER['SERVER_NAME'];
    $mensagemAssunto = "Confirmacao de email";
    $mensagemEmail = "Segue o link para a confirmacao do email em: http://$servidor/doisfatores/temp/$link.php?id=$id";
    enviaEmail();
    $msg = "Email enviado com sucesso.";
    alertaPositivo();
    header("Refresh: 0;url='../");

}else{
    echo "sessão expirada";
}






?>