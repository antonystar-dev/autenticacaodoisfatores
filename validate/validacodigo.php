<?php
session_start();
require './bancovalida.php';
$id= $_SESSION["id"];
$codigo = $_POST['codigo'];

echo '<a href="index.html">Voltar para pg anterior</a>';


$sql = "SELECT cod_temp FROM usuarios WHERE id=$id ";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    if (md5($codigo) == $row ["cod_temp"]) {
     
        echo "vc será redirecionado para pg correta";
        header("Refresh: 1;url='redireciona.php");
        }elseif($codigo =="EXPIRADO"){
            echo "Código inválido";
            header("Refresh: 1;url='../");
        }else{
          echo "Código inválido";
          header("Refresh: 1;url='../");
        }
    
  }
} else {
  echo "não carregou";
}
$conn->close();



?>