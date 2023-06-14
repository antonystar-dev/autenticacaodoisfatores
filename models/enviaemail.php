<?php
//require 'bancovalida.php';
//require 'banco.php';
$link =sha1(rand(1000, 9999));
$id= $_SESSION["id"];

$original = "../session/geracod.php";
$temporario = "../temp/$link.php";
!copy($original, $temporario);


echo $servidor=$_SERVER['SERVER_NAME'];

if($servidor=="localhost"){
    $destinatario= $_SESSION["email"];
    $nome = "Olá NOME_DO_USUARIO";
    $emaildoservidor = "no-reply@antonystar.com";
    $assunto="Segue o link para autenticação no sistema: http://localhost/doisfatores/temp/$link.php?id=$id segundo link http://192.168.135.132/doisfatores/temp/$link.php?id=$id";
   
    
    $body = "===================================" . "\n";
    $body = $body . "Autenticação de dois fatores" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Assunto: " . $assunto . "\n";
    
    $body = $body . "===================================" . "\n";
    //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    // envia o email
    mail($destinatario, $assunto , $body, "From: $emaildoservidor\r\n");
    
}else{
    $destinatario= $_SESSION["email"];
    $nome = "Olá NOME_DO_USUARIO";
    $emaildoservidor = "no-reply@antonystar.com";
    $assunto="Segue o link para autenticação no sistema: https://2fatores.antonystar.com/temp/$link.php?id=$id";
    
    $body = "===================================" . "\n";
    $body = $body . "Autenticação de dois fatores" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Assunto: " . $assunto . "\n";
    
    $body = $body . "===================================" . "\n";
    //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    // envia o email
    mail($destinatario, $assunto , $body, "From: $emaildoservidor\r\n");
}



?>