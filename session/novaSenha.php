<?php
session_start();
//require '../../../models/bancovalida.php';
require '../models/conexao/banco.php';
$idtemp = $_GET["id"];
//FAZER A COMPARAÇÃO DE ID PARA AUTORIZAR O RESET DA SENHA
$sql = "SELECT id FROM usuarios WHERE link_temp='$idtemp'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo $id = $row["id"];

    }

}
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

        h1 {
            color: white;
            font-weight: bold;
            padding: 50px auto;
        }

        h2 {
            color: white;
            font-weight: bold;
            padding: 30px auto;
        }

        p {
            color: red;
        }

        .codigo {
            background-color: #4C4A62;
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
        <h2>Nova senha</h2>
        <hr />
        <form method="post" action="../controller/trocaSenha.php">
            <input type="password" name="senha" placeholder="Digite a senha" /><br />
            <input type="password" name="senhaconfirm" placeholder="Digite novamente a senha" /><br />
            <input type="hidden" name="id" value="<?php echo $id ?>"/><br />
            <input type="submit" value="verificar" />

        </form>

    </div>
    <p>Use o codigo acima para realizar a validação do login no sistema</p>

</body>

</html>