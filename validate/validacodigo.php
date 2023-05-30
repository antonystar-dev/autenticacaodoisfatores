<?php
require './bancovalida.php';
session_start();
require_once 'loginBD.php';

$loginBD = new LoginBD();
$email = $loginBD->login($email, $senha);
$teste=$_SESSION["email"] = $email["email"];
//$teste="aaaaaa";
echo $teste;
//session_destroy();
$codigo = $_POST['codigo'];

echo '<a href="index.html">Voltar para pg anterior</a>';


$sql = 'SELECT cod_temp FROM usuarios WHERE id=$teste';
echo "ARRUMAR O ID";
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