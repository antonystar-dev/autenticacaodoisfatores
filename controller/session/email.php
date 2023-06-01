<?php
session_start();
require '../../bancovalida.php';
$id= $_SESSION["id"];
//header("Refresh:3");
$codigo = rand(100000, 999999);
echo $codigo;



$sql = "UPDATE usuarios SET link_temp=$codigo WHERE id=$id";

if ($conn->query($sql) === TRUE) {

  //header("Refresh: 10;url=../../expirado.php");
  echo "vai para a pagina que gera o codigo";

} else {
  echo "deu erro " . $conn->error;
}



$conn->close();

?>
