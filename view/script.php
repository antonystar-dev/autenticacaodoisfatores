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
            ?>`;
    }
    function cadastrar() {
        localStorage.setItem("estadoAtual", "2")
        document.getElementById("corpo").innerHTML = `
            <?php
            require 'view/cadastro.html';
            ?>`;
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
            require 'view/perfilativo.php';

            ?>`;
    }
    function pgUsuario() {
        localStorage.setItem("estadoAtual", "5")
        document.getElementById("corpo").innerHTML = `
        <?php
        require 'view/perfilativo.php';
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
            //resetaEstado()

        }

    }
    function resetaEstado() {
        localStorage.setItem("estadoAtual", "0");
    }

</script>