<?php
require './banco.php';
//header("Refresh:3");
$codigo= rand(10, 99);
echo $codigo;


$sql = "UPDATE verificador SET verificador=$codigo WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "atualizado";
} else {
  echo "deu erro " . $conn->error;
}

$conn->close();

//




/*
for ($gerador = 100; $gerador <= 999; $gerador++) {
echo md5($gerador),'<br>';
}
*/
?>

    






