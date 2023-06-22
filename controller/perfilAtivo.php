<?php
$situacaoPerfil = null;
if (!empty($_SESSION["situacao"])) {
    $situacaoPerfil = $_SESSION["situacao"];
}
$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    $seçãoPerfilcol = $_SESSION["perfilcol"];
}
if ($situacaoPerfil == "1") {
    switch ($seçãoPerfilcol) {
        case "Administrador":
            include './view/admin.php';
            break;
        case "Usuario":
            include './view/usuario.php';
            break;
        default:
            //header("Refresh: 0;url='index.html'");
            '<script>
                    login();
                    window.location.reload(true);
                    </script>';
    }
} else {
    include './view/login-inativo.php';
}







?>