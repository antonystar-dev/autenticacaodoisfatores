<?php

$codigo = $_POST['codigo'];
//echo $codigo;
echo '<a href="index.html">Voltar para pg anterior</a>';

require './bancovalida.php';
$sql = 'SELECT cod_temp FROM usuarios WHERE id=1';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo $row["codigo"];
    //echo md5($row["codigo"]);
    if (md5($codigo) == $row ["cod_temp"]) {
        echo "vc será redirecionado para pg correta";
        header("Refresh: 1;url='redireciona.php");
        }else{
            echo "Código inválido";
        }
    
  }
} else {
  echo "não carregou";
}
$conn->close();

/*
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