<?php
require_once '../models/conexao/banco.php';
require_once '../models/functions.php';
$senha = $_POST["senha"];
$id= $_POST["id"];

$SessaoID = "UPDATE usuarios SET senha='$senha' WHERE id=$id ";
if ($conn->query($SessaoID) === TRUE) {
    $msg="Senha alterada com sucesso";
    alertaPositivo();
    header("Refresh: 0;url='../");
} else {
    echo "não enviou";
}


?>