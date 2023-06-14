<?php
 //header("Refresh: 120;url=geralink.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificação</title>
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
    input[type=text]{
    width: 40%;
    padding: 12px 15px;
    margin: 25px 4px;
    display: inline-block;
    border: 0px;
    border-radius: 4px;
    font-size: large;
    text-decoration: white;
     background-color: #CFD8DC;
   

}

input[type=text]:hover {
    border: 0px;
    background-color: white;
}
input[type=password]:hover{
    border: 0px;
    background-color: white;
}


::placeholder {
    color: #4C4A62;
}
input[type=submit] {
    width: 40%;
    background-color: #08fa81;
    color: #4C4A62;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-transform: uppercase;
}

input[type=submit]:hover {
    background-color: #33c27a;
}
    </style>
</head>
<body>
    <div class="codigo">
    <h1>Insira o codigo de verificação</h1>
    <form method="post" action="../models/validaCodigo.php">
        <input type="text" name="codigo" placeholder="Digite o codigo"/><br/>
        <input type="submit" value="verificar"/>

    </form>
    
    </div>
    
</body>
</html>