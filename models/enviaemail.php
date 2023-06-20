<?php
require_once '../models/functions.php';

$original="../session/geracod.php";
linkTemporario();
$servidor = $_SERVER['SERVER_NAME'];
$mensagemAssunto ="LINK DE VERIFICACAO DE DUAS ETAPAS";
$mensagemEmail="Segue o link para autenticação no sistema: http://$servidor/doisfatores/temp/$link.php?id=$idsessao";
enviaEmail();


?>