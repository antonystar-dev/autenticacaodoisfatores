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
    <h1 class="tituloAlertaCodigo">Insira o codigo de verificação</h1>
    <hr>
    <form method="post" action="../models/validaCodigo.php">
      <input type="text" class="campoCodigo" name="codigo" placeholder="Digite o codigo" /><br />
      <input type="submit" value="verificar" class="botaoCarregar" />
    </form>
  </div>

</body>

</html>