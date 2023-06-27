<?php

require_once '../models/usuarioDTO.php';
require_once '../models/usuarioDAO.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$estLogin = $_POST["link_temp"];
$situacaoConta = $_POST["situacao"];
$perfil_id = $_POST["perfil_id"];


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil_id($perfil_id);
$usuarioDTO->setEmail($email);
$usuarioDTO->setEstLogin($estLogin);
$usuarioDTO->setSituacaoConta($situacaoConta);




$usuarioDAO = new UsuarioDAO();
$usuarioDAO->updateUsuarioById($usuarioDTO);


echo $msg = "Atualizado com sucesso";

?>
