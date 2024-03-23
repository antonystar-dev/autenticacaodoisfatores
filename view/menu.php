

<div class="menu" id="menuPrincipal">
<?php
$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    
?>
    <div class="itens-menu-grupo">
        <span class="itens-menu">home</span>
        <span class="itens-menu">galeria</span>
        <span class="itens-menu">contatos</span>
        <span class="itens-menu">sobre</span>
        <!--    </div>
        <div class="botoes-acao"> -->
        <?php

       
        if (!empty($_SESSION["perfilcol"])) {
            $seçãoPerfilcol = $_SESSION["perfilcol"];
        }
        switch ($seçãoPerfilcol) {
            case "Administrador":
                echo'<button onclick=pgPerfil() class="botao">Perfil</button>';
                echo'<a href="./controller/logoffController.php"><button  class="botao">Sair</button></a>';
                break;
            case "Usuario":
                echo'<button onclick=pgPerfil() class="botao">Perfil</button>';
                echo'<a href="./controller/logoffController.php"><button  class="botao">Sair</button></a>';
                break;
                default:
                //echo'<button class="botao" onclick=login()>Entrar</button>';
                //echo'<button class="botao" onclick=cadastrar()>Cadastrar</button>';
            }

        ?>
                      
    </div>
<?php
}
?>
</div>
<!--  <div>
    <h2>Menu extra desenvolvimento</h2>
    <button onclick=mensagemAlerta()>Teste de cookie</button>
<a href="./controller/trocaSenha.php">Troca senha</a>
</div> -->
 
<div id="alertaPositivoID">
    
</div>
<div id="alertaNegativoID">
    
</div>

<div id="alertas">
    
</div>