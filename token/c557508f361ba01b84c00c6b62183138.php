<?php
require '../banco.php';
//header("Refresh:3");
$codigo = rand(100000, 999999);
echo $codigo;


$sql = "UPDATE verificador SET codigo=md5($codigo) WHERE id=1";

if ($conn->query($sql) === TRUE) {
  //echo "atualizado";
  header("Refresh: 10;url=../expirado.php");

} else {
  echo "deu erro " . $conn->error;
}



$conn->close();





/*
for ($gerador = 100; $gerador <= 999; $gerador++) {
echo md5($gerador),'<br>';
}
*/
?>

    






