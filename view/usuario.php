<?php
include '../controller/session.php';
include '../controller/validalogin.php';
include '../controller/perfilusuario.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina do usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    
</head>
<body>
<div class="menu">
        <div class="itens-menu-grupo">
            <span class="itens-menu">home</span>
            <span class="itens-menu">galeria</span>
            <span class="itens-menu">contatos</span>
            <span class="itens-menu">sobre</span>
     <!--    </div>
        <div class="botoes-acao"> -->
            
            <a href="../controller/sair.php"><button class="botao">Sair</button></a>
            
        </div>
    </div>
    <div>
        <h1>Pagina do Usuario</h1>
        <p>Aqui fica as coisas que o usuario terá acesso</p>
        
    </div>
</body>
</html>