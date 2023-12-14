<?php

require_once '../models/usuarioDTO.php';
require_once '../models/usuarioDAO.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);
$email = $_POST["email"];
$perfil_id = 2;
$situacaoConta=4;
$estLogin="DESLOGADO";



$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();
foreach ($usuarios as $u) {

    $verificaEmail[] = $u["email"];
}
if (in_array($email, $verificaEmail)) {

    $msg = "O e-mail informado ja existe na nossa base de dados.";
    echo "<script>localStorage.setItem('mensagemNegativa', '$msg');</script>";
    header("Refresh: 0;url='../'");




} else {
    $usuarioDTO = new UsuarioDTO();
    $usuarioDTO->setNome($nome);
    $usuarioDTO->setSenha($senha);
    $usuarioDTO->setEmail($email);
    $usuarioDTO->setPerfil_id($perfil_id);
    $usuarioDTO->setSituacaoConta($situacaoConta);
    $usuarioDTO->setEstLogin($estLogin);


    $usuarioDAO = new UsuarioDAO;
    $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

    if ($sucesso) {
        $msg = "Usuario cadastrado com sucesso";
        echo "<script>localStorage.setItem('mensagemPositiva', '$msg');
        localStorage.setItem('estadoAtual', '3');
        </script>";
        header("Refresh: 0;url='../'");
    }
}

?>