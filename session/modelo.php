<?php
session_start();
//require '../../../models/bancovalida.php';
require '../../models/conexao/banco.php';
$id= $_GET["id"];
//header("Refresh:3");
$codigo = rand(100000, 999999);




$sql = "UPDATE usuarios SET cod_temp=md5($codigo) WHERE link_temp='$id'";

if ($conn->query($sql) === TRUE) {

  header("Refresh: 10;url=../../models/expirado.php?id=$id");

} else {
  echo "deu erro " . $conn->error;
}



$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
body {
  background-color: #CFD8DC;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  text-align: center;
   
}
h1   {
  color: white;
  font-weight: bold;
  padding:50px auto;
}
h2    {
  color: white;
  font-weight: bold;
  padding:30px auto;
  }
  p   {
  color: red;
}
.codigo{
  background-color:#4C4A62;
  margin: 160px auto 100px auto;
  width: 60%;
  padding: 20px 20px;
  border-radius: 10px;
  height: 400px;
}
</style>
  <title>Gera Codigo</title>
</head>
<body>
  <div class="codigo">
    <h2>Codigo de verificação</h2>
    <hr/>
    <h1><?php echo $codigo;?></h1>
    
  </div>
  <p>Use o codigo acima para realizar a validação do login no sistema</p>
 
</body>
</html>
    






