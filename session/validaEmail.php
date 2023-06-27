<?php
session_start();

require '../controller/ponte.php';

//novaSenha();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/validaFormulario.js"></script>
    <title>Gera Codigo</title>
    <?php
    include '../css/linkCSS.php';
    ?>
</head>

<body class="bodyIndividual">
  <div class="codigo">
    <h2 class="tituloAlerta">Verificação de e-mail</h2>
    <hr />
    <h1 class="tituloAlertaCodigo">
      Endereço de e-mail confirmado com sucesso.
    </h1>

  </div>
  

</body>

</html>