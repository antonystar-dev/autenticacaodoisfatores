<?php
switch ($_SESSION["perfilcol"]) {
    case "Administrador":
        header("Refresh: 0;url='index.html'");
        
        break;
    case "Usuario":
       
        
        break;
        default:
        header("Refresh: 0;url='index.html'");
    }
    ?>