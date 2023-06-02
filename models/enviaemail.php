<?php
require 'bancovalida.php';
$link =sha1(rand(1000, 9999));
$id= $_SESSION["id"];

$original = "../controller/session/geracod.php";
$temporario = "../controller/temp/$link.php";
!copy($original, $temporario);

//require 'geradoradapgdocod.php';


$destinatario= $_SESSION["email"];
$nome = "Olá NOME_DO_USUARIO";
$emaildoservidor = "no-reply@antonystar.com";
//$assunto="Segue o link para autenticação no sistema: http://localhost/doisfatores/controller/temp/$link/$link.php";
$assunto="Segue o link para autenticação no sistema: http://localhost/doisfatores/controller/temp/$link.php?id=$id";

$body = "===================================" . "\n";
$body = $body . "Autenticação de dois fatores" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Assunto: " . $assunto . "\n";

$body = $body . "===================================" . "\n";
//$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $emaildoservidor\r\n");



?>