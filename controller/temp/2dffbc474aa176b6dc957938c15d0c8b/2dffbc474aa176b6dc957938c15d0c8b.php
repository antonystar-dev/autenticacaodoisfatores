<?php
session_start();
require '../../../models/bancovalida.php';
$id= $_SESSION["id"];
//header("Refresh:3");
$codigo = rand(100000, 999999);
echo $codigo;



$sql = "UPDATE usuarios SET cod_temp=md5($codigo) WHERE id=$id";

if ($conn->query($sql) === TRUE) {

  header("Refresh: 10;url=../../../models/expirado.php");

} else {
  echo "deu erro " . $conn->error;
}



$conn->close();

?>

    






