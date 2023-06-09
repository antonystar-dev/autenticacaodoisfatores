<?php
session_start();
require '../dao/conexao/banco.php';
$id= $_SESSION["id"];
$codigo = $_POST['codigo'];

$sql = "SELECT cod_temp FROM usuarios WHERE id=$id ";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    if (md5($codigo) == $row ["cod_temp"]) {
     
        
        header("Refresh: 1;url='../controller/redirecionaUsuario.php");
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