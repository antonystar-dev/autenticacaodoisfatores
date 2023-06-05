<?php
require './view/header.php';
?>
<?php
require './view/menu.php';
?>
    <div>
        <h1>Tela inicial do sistema</h1>
        <p>
            Olá, seja bem-vindo. Esse sistema tem como objetivo mostrar a funcionalidade do login com dois fatores ativo. Algumas implementações de diretório não foram feitas por se tratar de um sistema de login teste. 
        </p>
        <p>
            Fique tranquilo quanto ao login, os dados serão armazenados em um banco de dados seguindo a criptografia md5. Para realizar o cadastro, basta clicar no botão superior direito com o nome “CADASTRAR” e logo em seguida será direcionado a página de cadastro. 
        </p>
        <p>
            Foi implementado um sistema de seção que após um determinado período os arquivos responsáveis por gerar o código de verificação e do link do e-mail serão excluídos do sistema, não havendo a possibilidade de algum terceiro fazer o uso do link, pois o mesmo já estará expirado. 
        </p>
        <p style="font-weight: bold;">
            Esta exibição do sistema não está focada no Front-end mas sim nas funcionalidades apresentadas na camada Back-end.  
        </p>
    </div>
    <?php
require './view/footer.php';
?>
