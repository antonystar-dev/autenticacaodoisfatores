<?php
require_once '../dao/usuarioDAO.php';


$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();

$email= $_POST['email'];
//$email = "sac@antonystar.com";
//echo $email;


foreach ($usuarios as $u) {

    if ($email == $u["email"]) {
        //echo $u["email"];
        echo "Email enviado com sucesso.";
        $destinatario = $email;
        $nome = "Olá NOME_DO_USUARIO";
        $emaildoservidor = "no-reply@antonystar.com";
        $assunto = "Reset de senha";

        $body = "===================================" . "\n";
        $body = $body . "Prezado(a), segue o link para o reset da senha:" . "\n";
        $body = $body . "===================================" . "\n\n";
        $body = $body . "LINK DO RESET DA SENHA\n";
        

        $body = $body . "===================================" . "\n";
        //$body = $body .= "Content-type: text/html; charset=iso-8859-1\r\n";

        // envia o email
        mail($destinatario, $assunto, $body, "From: $emaildoservidor\r\n");
    }
}

header("Refresh: 0;url='../'");

?>