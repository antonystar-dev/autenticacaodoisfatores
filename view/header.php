<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Verificação de duas etapas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/esqueciSenha.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/cadastro.css'>
    <style>
        body {
            margin: 0;
            padding: 0;
            border: 0;
            display:flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
    <script src="./js/ocultamenu.js"></script>
    <?php
    require './js/script.php';

    ?>
</head>

<body onload="estadoAtual()">
<main>