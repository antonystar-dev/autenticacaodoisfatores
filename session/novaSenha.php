<?php
session_start();

require '../models/conexao/banco.php';
$idtemp = $_GET["id"];
$sql = "SELECT link_temp FROM usuarios WHERE link_temp='$idtemp'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $sql = "SELECT id FROM usuarios WHERE link_temp='$idtemp'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                 $id = $row["id"];

            }

        }

    }

} else {
    header("Refresh: 0;url='../view/email-expirado.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/validaFormulario.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/esqueciSenha.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/cadastro.css'>

    <title>Gera Codigo</title>
</head>

<body>
    <div class="geral">
        <div class="codigo">
            <h2 class="tituloAlerta">Definir Nova senha</h2>
            <hr />
            <form method="post" onsubmit="return validarSenha()" action="../controller/trocaSenha.php">
                <label>Nova senha:</label><br />
                <input type="password" id="senha" name="senha" class="senhaCadastro" placeholder="Digite a senha"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                    title="A senha informada não atende os requisitos mínimos" required /><br />
                <label>Repetir nova senha:</label><br />
                <input type="password" id="confSenha" name="senhaconfirm" class="senhaCadastro"
                    placeholder="Digite novamente a senha" required /><br />
                <h4 style="color: white;">A senha deve atender aos requisitos de complexidade:</h4>
                <p style="color: white; font-size:14px;">Numeros, Letras Maiusculas e minusculas, minimo de 6 caracteres</p>
                <input type="hidden" name="id" value="<?php echo $id ?>" /><br />
                <div class="campoBotoesEsqSenha">
                    <input type="submit" value="verificar" class="botaoCarregar" />
                    <a href="http://2fatores.antonystar.com/"><button type="button" class="botaoCancelar" onclick="paginaInicial()">Cancelar</button></a>
                </div>


            </form>

        </div>
    </div>
</body>

</html>