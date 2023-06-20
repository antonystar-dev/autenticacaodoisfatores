<?php
//require '../../models/bancovalida.php';
require '../models/conexao/banco.php';
session_start();
$idsessao = $_GET["id"];
$nome = rand(1000, 9999);

//$gerapg = "UPDATE usuarios SET dir_temp=md5($nome) WHERE link_temp=$id";
$gerapg = "UPDATE usuarios SET dir_temp=md5($nome) WHERE link_temp='$idsessao'";

if ($conn->query($gerapg) === TRUE) {

  $sql = "SELECT dir_temp FROM usuarios WHERE link_temp='$idsessao'";
  $result = $conn->query($sql);

  $diretorio = md5($nome);

  $original = "../session/modelo.php";
  mkdir("../temp/$diretorio");
  $temporario = "../temp/$diretorio/$diretorio.php";
  !copy($original, $temporario);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $diretorio = $row["dir_temp"];

      echo header("Refresh: 0;url='../temp/$diretorio/$diretorio.php?id=$idsessao'");

    }
  } else {
    include '../view/email-expirado.php';
  }


} else {
  echo "deu erro " . $conn->error;
}

$conn->close();

//header("Refresh: 10;url=expirado.php");

?>