<?php
session_start();
$idsessao = session_id();
if (is_file('./controller/ponte.php')) {
    require './controller/ponte.php';
} else {
    require '../controller/ponte.php';
}
novaSenha();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../view/js/validaFormulario.js"></script>
    <title>Gera Codigo</title>
    <?php
    include '../view/css/linkCSS.php';
    ?>
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
                <p style="color: white; font-size:14px;">Numeros, Letras Maiusculas e minusculas, minimo de 6 caracteres
                </p>
                <input type="hidden" name="id" value="<?php echo $idsessao ?>" /><br />
                <div class="campoBotoesEsqSenha">
                    <input type="submit" value="verificar" class="botaoCarregar" />
                    <a href="http://2fatores.antonystar.com/"><button type="button" class="botaoCancelar"
                            onclick="paginaInicial()">Cancelar</button></a>
                </div>


            </form>

        </div>
    </div>
</body>

</html>