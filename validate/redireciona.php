<?php
        session_start();
        include 'validaLogin.php';
        ?> 
        
                    <?php
                    switch ($_SESSION["perfilcol"]) {
                        case "Administrador":
                           
                            //header("Location:../admin.php"); 
                            break;
                        case "Usuario":
                             header("Location:../usuario.php"); 
                            break;
                       
                    }
                    ?>