<?php
require_once '../models/conexao/banco.php';
require_once '../models/functions.php';
$senha = $_POST["senha"];
$id= $_POST["id"];
/* $senha=rand(1000, 9999);
$id="2"; */


/* echo $senha.'<br>';
echo $id; */


$SessaoID = "UPDATE usuarios SET senha='$senha' WHERE id=$id ";
if ($conn->query($SessaoID) === TRUE) {
    $msg="Senha alterada com sucesso";
    alertaPositivo();
    header("Refresh: 0;url='../");
} else {
    echo "não enviou";
}


?>