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
     
        //aqui fica a função q envia (Logado) no banco.
        $SessaoID = "UPDATE usuarios SET link_temp='LOGADO' WHERE id=$id ";
        if ($conn->query($SessaoID) === TRUE) {
          //echo "enviou";
      } else {
          echo "não enviou";
          
      }

        header("Refresh: 1;url='../controller/redirecionaUsuario.php");
        }elseif($codigo =="EXPIRADO"){
            echo "Código inválido";
            header("Refresh: 1;url='../");
        }else{
          echo "Código inválido";
          header("Refresh: 1;url='../");
          session_destroy();
        }
    
  }
} else {
  echo "não carregou";
}
$conn->close();



?>