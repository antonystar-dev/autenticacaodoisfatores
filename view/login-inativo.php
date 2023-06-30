<?php
 session_start();
if (is_file('./controller/ponte.php')) {
    require_once './controller/ponte.php';
} else {
    require_once '../controller/ponte.php';
}
situacaoLogin();
bloqueiosPerfil();

if ($situacaoPerfil == "1") {
    echo "<script>
    window.location.replace('../');
    </script>";
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>
    <?php
    include '../css/linkCSS.php';
    ?>

</head>

<body class="bodyIndividual">

    <div class="codigo">
        <h1 class="tituloAlerta">Situação do cadastro</h1>
        <hr />
        <h2 class="tituloAlertaCodigo">
            <?php echo $situacao ?? null; ?>
        </h2>
        <h2 class="tituloAlertaCodigo">
            <?php echo $emailconf ?? null; ?>
        </h2>
        <span><a href="../controller/logoffController.php">Sair</a></span>

    </div>
</body>

</html>