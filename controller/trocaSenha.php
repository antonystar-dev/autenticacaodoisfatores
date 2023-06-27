<?php
if (is_file('./controller/ponte.php')) {
    require './controller/ponte.php';
} else {
    require '../controller/ponte.php';
}
$senha = $_POST["senha"];
$id= $_POST["id"];
//$id="a5gbkcs3a6hkgv21bcc183q63i";

$SessaoID = "UPDATE usuarios SET senha='$senha' WHERE id='$id' ";
if ($conn->query($SessaoID) === TRUE) {
    $msg="Senha alterada com sucesso";
    alertaPositivo();
    header("Refresh: 0;url='../");
} else {
    echo "não enviou";
}


?>