<?php

if($_SERVER['SERVER_NAME']=="localhost"){
    //SERVDOR LOCAL
        echo "estamos em ambiente de produção sem servidor SMTP<br/>";
        echo "<a href='geradoradapgdocod.php'target='_blank'>Clique aqui</a> para simular o email";

}else{
    //SERVIDOR WEB
/*
$destinatario = "sac@antonystar.com";
$emailusuario = "sac@webportalcursos.com";
$dataehora = date('d/m/Y \à\s H:i:s');
echo $assunto = "Codigo de verificação para acessar o sistema";

$body = "===================================" . "\n";
$body = $body . "Verificação em duas etapas" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Usuario: " . $_SESSION["usuario"] . "\n";
$body = $body . "Email: " . $emailusuario . "\n";
$body = $body . "Mensagem: " . $assunto . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto, $body, "From: $emailusuario\r\n");
*/
}

?>