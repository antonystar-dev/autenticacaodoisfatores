<?php
if (is_file('./controller/ponte.php')) {
    require './controller/ponte.php';
} else {
    require '../controller/ponte.php';
}

$original="../session/geracod.php";
linkTemporario();
$servidor = $_SERVER['SERVER_NAME'];
$mensagemAssunto ="LINK DE VERIFICACAO DE DUAS ETAPAS";
$mensagemEmail="Segue o link para autenticação no sistema: http://$servidor/doisfatores/temp/$link.php?id=$idsessao";
enviaEmail();


?>