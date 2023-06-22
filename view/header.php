<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Verificação de duas etapas</title>
    <?php
    require './css/linkCSS.php';
    ?>
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