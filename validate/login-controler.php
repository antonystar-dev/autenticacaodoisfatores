<?php
session_start();
require_once 'loginBD.php';

$email = $_POST["email"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);


$loginBD = new LoginBD();
$email = $loginBD->login($email, $senha);

if (!empty($email)) {
    $_SESSION["email"] = $email["email"];
    $_SESSION["perfilcol"] = $email["perfilcol"];
 
      
    header("Refresh: 1;url='redireciona.php");
   
} else {
    $msg = "Usuário ou senha incorreto";
    
    echo $msg;
    header("Refresh: 3;url='../");
    
    
}
?>
