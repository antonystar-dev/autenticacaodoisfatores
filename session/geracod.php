<?php
//require '../../models/bancovalida.php';
require '../../models/banco.php';
session_start();
$id= $_GET["id"];
$nome = rand(1000, 9999);
$gerapg = "UPDATE usuarios SET dir_temp=md5($nome) WHERE id=$id ";
if ($conn->query($gerapg) === TRUE) {
  
  $sql = "SELECT dir_temp FROM usuarios WHERE id=$id";
$result = $conn->query($sql);

$diretorio=md5($nome);
  $original = "../session/modelo.php";
   mkdir("../temp/$diretorio");
  $temporario = "../temp/$diretorio/$diretorio.php";
!copy($original, $temporario);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $diretorio=$row["dir_temp"];
     echo header("Refresh: 0;url='../temp/$diretorio/$diretorio.php?id=$id'");
   
  }
} else {
  echo "não carregou";
}


} else {
  echo "deu erro " . $conn->error;
}

$conn->close();

//header("Refresh: 10;url=expirado.php");

?>

sdfsdfdsfdss