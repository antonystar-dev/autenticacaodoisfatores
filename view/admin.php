<?php
include '../controller/session.php';
include '../controller/validalogin.php';
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div>
        <h1>Pagina do Administrador</h1>
        <p>Seja bem vindo</p>
        <a href="../controller/sair.php">Sair</a>
    </div>
</body>
</html>