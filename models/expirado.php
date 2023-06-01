<?php

require './bancovalida.php';
$sql = 'SELECT cod_temp, dir_temp FROM usuarios WHERE id=1';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $codtemp=$row["cod_temp"];
     $dirtemp=$row["dir_temp"];
   
    unlink("../controller/temp/$dirtemp/$dirtemp.php");
    rmdir("../controller/temp/$dirtemp/");
    
    
  }
} else {
  echo "não carregou";
}
$sql = "UPDATE usuarios SET cod_temp='EXPIRADO', dir_temp='EXPIRADO' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Código Expirado";
  

} else {
  echo "deu erro " . $conn->error;
}
//header("Refresh: 1;url=geralink.php");





$conn->close();


?>