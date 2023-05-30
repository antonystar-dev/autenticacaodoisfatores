<?php
require '../../bancovalida.php';
//header("Refresh:3");
$codigo = rand(100000, 999999);
echo $codigo;


//$sql = "UPDATE usuarios SET cod_temp=md5($codigo) WHERE id=1";///
$sql = "UPDATE usuarios SET cod_temp=$codigo WHERE id=1";

if ($conn->query($sql) === TRUE) {
  //echo "atualizado";
  header("Refresh: 10;url=../../expirado.php");

} else {
  echo "deu erro " . $conn->error;
}



$conn->close();

?>

    






