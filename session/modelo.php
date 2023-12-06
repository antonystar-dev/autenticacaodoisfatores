<?php
session_start();
if (is_file('./controller/ponte.php')) {
  require './controller/ponte.php';
} else {
  require '../../controller/ponte.php';
}
geraCodigo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include '../../view/css/linkCSS.php';
  ?>

  <title>Gera Codigo</title>
</head>

<body class="bodyIndividual">
  <div class="codigo">
    <h2 class="tituloAlerta">Codigo de verificação</h2>
    <hr />
    <h1 class="tituloAlertaCodigo">
      <?php echo $codigo; ?>
    </h1>

  </div>
  <p class="mensagemAlerta">Use o codigo acima para realizar a validação do login no sistema</p>

</body>

</html>