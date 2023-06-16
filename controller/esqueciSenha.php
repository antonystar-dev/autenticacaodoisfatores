<?php
require_once '../models/usuarioDAO.php';


$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();

$email = $_POST['email'];



if (empty($email)) {
    
    $msg = "Digite o email para o recebimento da nova senha";
    echo "<script>localStorage.setItem('mensagemNegativa', '$msg');</script>";
    header("Refresh: 0;url='../'");
} else {
    foreach ($usuarios as $u) {

        if ($email == $u["email"]) {
            //echo $u["email"];
            
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
    
    $msg = "Email enviado com sucesso.";
    echo "<script>localStorage.setItem('mensagemPositiva', '$msg');</script>";
    header("Refresh: 0;url=''");

}




?>