<?php
$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    $seçãoPerfilcol = $_SESSION["perfilcol"];
}
switch ($seçãoPerfilcol) {
    case "Administrador":
        header("Refresh: 0;url='index.html'");
        '<script>
        login();
        window.location.reload(true);
        </script>';
        break;
    case "Usuario":

        break;
    default:
        //header("Refresh: 0;url='index.html'");
        '<script>
        login();
        window.location.reload(true);
        </script>';
}
?>