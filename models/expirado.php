<?php

require './banco.php';
$id= $_GET["id"];
$sql = "SELECT cod_temp, dir_temp FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $codtemp=$row["cod_temp"];
     $dirtemp=$row["dir_temp"];

   if($dirtemp!="EXPIRADO"){
    unlink("../controller/temp/$dirtemp/$dirtemp.php");
    rmdir("../controller/temp/$dirtemp/");
  }
    
    
  }
} else {
  echo "não carregou";
}
$sql = "UPDATE usuarios SET cod_temp='EXPIRADO', dir_temp='EXPIRADO' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  //echo "Código Expirado";
  

} else {
  echo "deu erro " . $conn->error;
}
//header("Refresh: 1;url=geralink.php");
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
    <h1>Código Expirado</h1>
    
  </div>
  <p>Para gerar um novo código, será necessario clicar novamente no link enviado no email</p>
 
</body>
</html>
    


