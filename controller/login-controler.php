<?php
session_start();
require_once '../models/loginBD.php';

$email = $_POST["email"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);


$loginBD = new LoginBD();
$email = $loginBD->login($email, $senha);

if (!empty($email)) {
    $_SESSION["email"] = $email["email"];
    $_SESSION["perfilcol"] = $email["perfilcol"];
    $_SESSION["id"] = $email["id"];
     
   require_once '../models/enviaemail.php';
   header("Refresh: 1;url='../view/codigo.php");
   
} else {
    $msg = "Usuário ou senha incorreto";
    
    echo $msg;
    header("Refresh: 3;url='../view/index.html");
    
    
}
?>
