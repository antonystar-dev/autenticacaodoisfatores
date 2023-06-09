<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);
$email = $_POST["email"];
$perfil_id=2;


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setEmail($email);
$usuarioDTO->setPerfil_id($perfil_id);


$usuarioDAO = new UsuarioDAO;
$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

if ($sucesso) {
    $msg = "Cadastrado com sucesso";
    echo "<script>";
    
    echo "window.location.href = '../?msg={$msg}';";
    //echo "window.location.href = '../?msg={$msg}';";
    echo "</script> ";
}

?>


