<?php
require_once '../models/usuarioDAO.php';
require_once '../models/functions.php';


$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();

$email = $_POST['email'];



if (empty($email)) {
    $msg = "Digite o email para o recebimento da nova senha";
    alertaNegativo();
} else {
    foreach ($usuarios as $u) {

        if ($email == $u["email"]) {
            session_start();
            //aqui eu chamo a função de geralção de link aleatorio;
            $emailRecuperacao = $email;
            $original = "../session/novaSenha.php";

            linkTemporario();


            $servidor = $_SERVER['SERVER_NAME'];
            $mensagemAssunto = "Reset de senha";
            $id2 = session_id();
            $mensagemEmail = "Segue o link para a criação da nova senha em: http://$servidor/doisfatores/temp/$link.php?id=$id2";
            enviaEmail();

        }

    }

    $msg = "Email enviado com sucesso.";
    alertaPositivo();
    header("Refresh: 0;url='../");


}




?>