<?php

require './banco.php';

$sql = 'SELECT codigo FROM verificador WHERE id=2';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $nome=$row["codigo"];
    
    rename("token/$nome.php", "token/c557508f361ba01b84c00c6b62183138.php");
    header("Refresh: 5;url=geralink.php");
    
  }
} else {
  echo "não carregou";
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