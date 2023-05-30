<?php
session_start();
require './bancovalida.php';
$id= $_SESSION["id"];
$nome = rand(1000, 9999);

$gerapg = "UPDATE usuarios SET dir_temp=md5($nome) WHERE id=$id ";
if ($conn->query($gerapg) === TRUE) {
  
  $sql = "SELECT dir_temp FROM usuarios WHERE id=$id";
$result = $conn->query($sql);

$diretorio=md5($nome);


  $original = "../session/modelo.php";
   mkdir("../validate/temp/$diretorio");
  $temporario = "../validate/temp/$diretorio/$diretorio.php";
!copy($original, $temporario);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $diretorio=$row["dir_temp"];
    echo "<a href='../validate/temp/$diretorio/$diretorio.php'>vamos</a>";
  
   
    
  }
} else {
  echo "não carregou";
}


} else {
  echo "deu erro " . $conn->error;
}

$conn->close();





?>