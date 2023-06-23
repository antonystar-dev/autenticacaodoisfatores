<?php

$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    $seçãoPerfilcol = $_SESSION["perfilcol"];
}

switch ($seçãoPerfilcol) {
    case "Administrador":
        include_once './view/admin.php';
        break;
    case "Usuario":
        include_once './view/usuario.php';
        break;
    default:
        //header("Refresh: 0;url='index.html'");
        '<script>
                    login();
                    window.location.reload(true);
                    </script>';
}

?>