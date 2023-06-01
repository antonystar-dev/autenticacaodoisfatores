<?php
        session_start();
        include 'validaLogin.php';
        ?> 
        
                    <?php
                    switch ($_SESSION["perfilcol"]) {
                        case "Administrador":
                           
                            header("Location:../view/admin.php"); 
                            break;
                        case "Usuario":
                             header("Location:../view/usuario.php"); 
                            break;
                       
                    }
                    ?>