<?php

$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    $seçãoPerfilcol = $_SESSION["perfilcol"];
}

switch ($seçãoPerfilcol) {
    case "Administrador":
        include_once './view/usr/admin.php';
        break;
    case "Usuario":
        include_once './view/usr/usuario.php';
        break;
    default:
        //header("Refresh: 0;url='index.html'");
        '<script>
                    login();
                    window.location.reload(true);
                    </script>';
}

?>