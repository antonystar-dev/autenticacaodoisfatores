<?php
    $destinatario = "sac@antonystar.com";
    $nome = "teste";
    $emaildoservidor = "no-reply@antonystar.com";
    $assunto='Segue o link para autenticação no sistema: <a href="https://antonystar.com/as/">Clique aqui</a> ';

$body = "===================================" . "\n";
$body = $body . "Autenticação de dois fatores" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Assunto: " . $assunto . "\n";
$body = $body . "===================================" . "\n";
//$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $emaildoservidor\r\n");

// redireciona para a página de obrigado
//header("location:email-enviado.php");
?>