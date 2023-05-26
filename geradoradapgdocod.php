<?php

require './banco.php';

$link = rand(1, 1000);
//echo $link;


$gerapg = "UPDATE verificador SET codigo=md5($link) WHERE id=2";
if ($conn->query($gerapg) === TRUE) {
  
  $sql = 'SELECT codigo FROM verificador WHERE id=2';
$result = $conn->query($sql);
$nome=md5($link);
rename("token/c557508f361ba01b84c00c6b62183138.php", "token/$nome.php");


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $link=$row["codigo"];
    echo "<a href='token/$link.php'>vamos</a>";
    //echo md5($row["codigo"]);
   
    
  }
} else {
  echo "não carregou";
}


} else {
  echo "deu erro " . $conn->error;
}

$conn->close();


/*
$sql = 'SELECT codigo FROM verificador WHERE id=2';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $link=$row["codigo"];
    echo "<a href='$link.php'>vamos</a>";
    //echo md5($row["codigo"]);
   
    
  }
} else {
  echo "não carregou";
}
$conn->close();


//header("Refresh:10");
$teste = 'asdf';

if (md5($teste) === '912ec803b2ce49e4a541068d495ab570') {
    echo $teste;
    }else{
        //echo "esta errado";
    }

    $aleatorio= rand(100, 999);
    echo $aleatorio;



for ($gerador = 100; $gerador <= 999; $gerador++) {
    echo md5($gerador),'<br>';
}
*/


?>