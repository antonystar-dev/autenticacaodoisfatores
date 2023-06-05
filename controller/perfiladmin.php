<?php
switch ($_SESSION["perfilcol"]) {
    case "Administrador":
        
       
        break;
    case "Usuario":
        header("Refresh: 0;url='index.html'");
        
        break;
        default:
        header("Refresh: 0;url='index.html'");
    }
    ?>