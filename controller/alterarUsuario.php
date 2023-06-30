<?php

require_once '../models/usuarioDTO.php';
require_once '../models/usuarioDAO.php';
require_once '../models/functions.php';

// recuperei os dados do formulario
echo $id = $_POST["id"];
echo $nome = $_POST["nome"];
echo $senha = $_POST["senha"];
echo $email = $_POST["email"];
echo $codTemp = $_POST["cod_temp"];
echo $dirTemp = $_POST["dir_temp"];
echo $linkTemp = $_POST["link_temp"];
echo $estLogin = $_POST["estado"];
echo $situacaoConta = $_POST["situacao"];
echo $perfil_id = $_POST["perfil_id"];


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil_id($perfil_id);
$usuarioDTO->setEmail($email);
$usuarioDTO->setCodtemp($codTemp);
$usuarioDTO->setDirtemp($dirTemp);
$usuarioDTO->setLinktemp($linkTemp);
$usuarioDTO->setEstLogin($estLogin);
$usuarioDTO->setSituacaoConta($situacaoConta);
$usuarioDTO->setId($id);




$usuarioDAO = new UsuarioDAO();
$usuarioDAO->updateUsuarioById($usuarioDTO);


$msg="Perfil alterado com sucesso";
alertaPositivo();
header("Refresh: 0;url='../");

?>
