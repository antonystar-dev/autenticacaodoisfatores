<?php

require './bancovalida.php';

$diretorio = rand(1000, 9999);


//$gerapg = "UPDATE usuarios SET dir_temp=md5($diretorio) WHERE id=1";////////////
$gerapg = "UPDATE usuarios SET dir_temp=$diretorio WHERE id=1";
if ($conn->query($gerapg) === TRUE) {
  
  $sql = 'SELECT dir_temp FROM usuarios WHERE id=1';
$result = $conn->query($sql);
//$nome=md5($diretorio);//////////

  $original = "../session/modelo.php";
   mkdir("../validate/temp/$diretorio");
  $temporario = "../validate/temp/$diretorio/$diretorio.php";
!copy($original, $temporario);
echo $temporario,'<br>';

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $diretorio=$row["dir_temp"];
    echo "<a href='../validate/temp/$diretorio/$diretorio.php'>vamos</a>";
    //echo "<a href='../session/ee8bdb7ae66cf9fd61968da38b79c0f6/$diretorio.php'>vamos</a>";////
    //echo md5($row["codigo"]);
   
    
  }
} else {
  echo "não carregou";
}


} else {
  echo "deu erro " . $conn->error;
}

$conn->close();





?>