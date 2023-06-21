<script type="text/javascript">
    function paginaInicial() {
        localStorage.setItem("estadoAtual", "0")
       
        window.location.reload(true);

    }
    function esqueciSenha() {
        localStorage.setItem("estadoAtual", "1")
        document.getElementById("corpo").innerHTML = `
            <?php
            require 'view/esqueci-senha.html';
            ?>`
        ocultaMenu();;
    }
    function cadastrar() {
        localStorage.setItem("estadoAtual", "2")
        document.getElementById("corpo").innerHTML = `
            <?php
            require 'view/cadastro.html';
            ?>`
             ocultaMenu();
            ;
    }
    function login() {
        localStorage.setItem("estadoAtual", "3")
        document.getElementById("corpo").innerHTML = `
            <?php
            require 'view/index.html';
            ?>`
        ocultaMenu();
        ;
    }
    function pgAdmin() {
        localStorage.setItem("estadoAtual", "4")
        document.getElementById("corpo").innerHTML = `
            <?php
            require_once 'controller/perfilAtivo.php';

            ?>`;
    }
    function pgUsuario() {
        localStorage.setItem("estadoAtual", "5")
        document.getElementById("corpo").innerHTML = `
        <?php
        require_once 'controller/perfilAtivo.php';
        ?>`;
    }

    function estadoAtual() {

        let lastname = localStorage.getItem("estadoAtual", "0");
        //alert(lastname);
        estadoAtual = lastname;

        switch (estadoAtual) {
            case '1':
                esqueciSenha();
                break;
            case '2':
                cadastrar();
                break;
            case '3':
                login();
                break;
            case '4':
                pgAdmin();
                break;
            case '5':
                pgUsuario();
                break;
            default:
            document.getElementById("corpo").innerHTML = `
            <?php
            require_once 'view/inicio.html';

            ?>`;

        }
        mensagemAlerta();

    }
    function resetaEstado() {
        localStorage.setItem("estadoAtual", "0");
    }

    



    function mensagemAlerta() {

        mensagemNeg();
        mensagemPosit();


    }
    setTimeout(mensagemAlerta, 4000);

    function mensagemNeg() {

        const mensagemExibida = localStorage.getItem("mensagemNegativa");
        if (localStorage.getItem("mensagemNegativa") == null) {
            //alert("olha o trem errado aq");
        }
        document.getElementById("alertaNegativoID").innerHTML = '<div class="alertaNegativo">' + mensagemExibida + '</div>';

        if (localStorage.getItem("mensagemNegativa") == "vazio") {
            document.getElementById("alertaNegativoID").innerHTML = '';
        }
        localStorage.setItem("mensagemNegativa", "vazio");
    }
    function mensagemPosit() {
        const mensagemExibida = localStorage.getItem("mensagemPositiva");

        document.getElementById("alertaPositivoID").innerHTML = '<div class="alertaPositivo">' + mensagemExibida + '</div>';

        if (localStorage.getItem("mensagemPositiva") == "vazio") {
            document.getElementById("alertaPositivoID").innerHTML = '';
        }
        localStorage.setItem("mensagemPositiva", "vazio");
    }





</script>