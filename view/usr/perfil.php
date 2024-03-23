<div>
    <div class="perfil">
        <h1 class="tituloAlerta">Dados pessoais</h1>
        <hr>
        <span>Nome:</span>
        <span>meunome</span>
        <div class="divBotoesSenha">
       
        <form action="#" method="POST">
       
            <span>Alterar senha:</span><br>
            <input name="senha" type="password" placeholder="Senha anterior" class="senhaPerfilAnterior"><br>
            <div class="divBotoesSenha2">
           
            <input name="senha" type="password" placeholder="Nova senha" class="senhaPerfil"><br>
           
            <input name="senha" type="password" placeholder="Confirmar senha" class="senhaPerfil"><br>
</div>
            <input type="submit" value="alterar" class="botaoAlterar" />
        </form>
</div>
<hr>
        <div class="divBotoesEmail">
            <h2>e-mail:</h2>
            <form action="#" method="POST">
                <span>Email atual</span><br>
                <h3>usuario@email.com</h3><br>
                <span>Novo email:</span><br>
                <input name="email" placeholder="Novo email" class="senhaPerfil"><br>
                <input type="submit" class="botaoAlterar" value="alterar" />
            </form>
        </div>
        <hr>
        <div class="divBotoesPerfil">
            <span>Excluir conta</span>
            <form action="#" method="POST">
                <input type="checkbox"><span>Deseja realmente excluir sua conta?</span><br>
                <input type="submit" class="botaoExcluir" value="Excluir" />
            </form>
            <div class="voltarPerfil"><button class="botaoCancelar" onclick="pgAdmin()">Voltar</button></div>
        </div>
    </div>
</div>