<div class="menu" id="menuPrincipal">
    <div class="itens-menu-grupo">
        <span class="itens-menu">home</span>
        <span class="itens-menu">galeria</span>
        <span class="itens-menu">contatos</span>
        <span class="itens-menu">sobre</span>
        <!--    </div>
        <div class="botoes-acao"> -->
        <?php

       
        $seçãoPerfilcol = null;
        if (!empty($_SESSION["perfilcol"])) {
            $seçãoPerfilcol = $_SESSION["perfilcol"];
        }
        switch ($seçãoPerfilcol) {
            case "Administrador":
                echo'<button onclick=pgAdmin() class="botao">Perfil</button>';
                echo'<a href="./controller/logoffController.php"><button  class="botao">Sair</button></a>';
                break;
            case "Usuario":
                echo'<button onclick=pgUsuario() class="botao">Perfil</button>';
                echo'<a href="./controller/logoffController.php"><button  class="botao">Sair</button></a>';
                break;
                default:
                echo'<button class="botao" onclick=login()>Entrar</button>';
                echo'<button class="botao" onclick=cadastrar()>Cadastrar</button>';
            }

        ?>
        
        
       
    </div>
</div>