<?php

require_once '../models/banco.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//$senha = md5($_POST["senha"]);

echo $nome;
echo $email;
echo $senha;
$perfilid=2;
     
    
    $validacao = true;
    if (empty($nome)) {
        $validacao = false;
    }


    if (empty($email)) {
        $validacao = false;
    }
    if (empty($senha)) {
        $validacao = false;
    }

   
    //Inserindo no Banco:
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuarios (nome,senha,email,perfil_id) VALUES(?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome, $senha, $email,$perfilid));
        Banco::desconectar();
        $msg = "Gravado com sucesso";
          echo "<script>";
          echo "window.location.href ='index.php?msg={$msg}';";
          echo "</script> "; 
    }

?>


