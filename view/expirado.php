<?php

if (is_file('./controller/ponte.php')) {
  require './controller/ponte.php';
} else {
  require '../controller/ponte.php';
}
codigoExpirado();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include '../css/linkCSS.php';
  ?>

  <title>Gera Codigo</title>
</head>

<body class="bodyIndividual">
  <div class="codigo">
    <h2 class="tituloAlerta">Codigo de verificação</h2>
    <hr />
    <h1 class="tituloAlertaCodigo">Código Expirado</h1>

  </div>
  <p class="mensagemAlerta">Para gerar um novo código, será necessario clicar novamente no link enviado no email</p>

</body>

</html>