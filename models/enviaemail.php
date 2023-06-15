<?php
//require 'bancovalida.php';
//require 'banco.php';
$link = sha1(rand(1000, 9999));
$id = $_SESSION["id"];
$idsessao = session_id();
$nomeUsuario = $_SESSION["nome"];

$SessaoID = "UPDATE usuarios SET link_temp='$idsessao' WHERE id=$id ";
if ($conn->query($SessaoID) === TRUE) {
    //echo "enviou";
} else {
    echo "não enviou";
}

$conn->close();

$original = "../session/geracod.php";
$temporario = "../temp/$link.php";
!copy($original, $temporario);
$servidor = $_SERVER['SERVER_NAME'];
if ($servidor == "localhost") {
    $destinatario = $_SESSION["email"];
    $nome = $nomeUsuario;
    $emaildoservidor = "no-reply@antonystar.com";
    $assunto = "CODIGO DE VERIFICACAO";

    $body = "===================================" . "\n";
    $body = $body . "Autenticação de dois fatores" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Assunto: " . $assunto . "\n";
    $body = $body . "Segue o link para autenticação no sistema: http://localhost/doisfatores/temp/$link.php?id=$idsessao" . "\n";

    $body = $body . "===================================" . "\n";
    //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // envia o email
    mail($destinatario, $assunto, $body, "From: $emaildoservidor\r\n");

} else {
    $destinatario = $_SESSION["email"];
    $nome = $nomeUsuario;
    $emaildoservidor = "no-reply@antonystar.com";
    $assunto = "CÓDIGO DE VERIFICAÇÃO";

    $body = "===================================" . "\n";
    $body = $body . "Autenticação de dois fatores" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Assunto: " . $assunto . "\n";
    $body = $body . "Segue o link para autenticação no sistema: https://2fatores.antonystar.com/temp/$link.php?id=$$idsessao" . "\n";

    $body = $body . "===================================" . "\n";
    //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // envia o email
    mail($destinatario, $assunto, $body, "From: $emaildoservidor\r\n");
}



?>