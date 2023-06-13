<?php
session_start();
require_once '../dao/loginDAO.php';

$email = $_POST["email"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);


$loginBD = new LoginBD();
$email = $loginBD->login($email, $senha);

if (!empty($email)) {
    $_SESSION["email"] = $email["email"];
    $_SESSION["perfilcol"] = $email["perfilcol"];
    $_SESSION["id"] = $email["id"];
     
   require_once '../models/enviaEmail.php';
   header("Refresh: 1;url='../view/codigo.php");
   
} else {
    
    
    $msg = "Usuario ou senha incorreto";
    //setcookie('mensagem',$msg);
    echo "<script>localStorage.setItem('mensagemNegativa', '$msg');</script>";
    
    //echo $msg;
    header("Refresh: 0;url='../");
    
    
}
?>
