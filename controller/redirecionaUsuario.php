<?php
        session_start();
       
        include 'validaLogin.php';
        
        ?> 
        
                    <?php
                    switch ($_SESSION["perfilcol"]) {
                        case "Administrador":
                           
                            echo'<script>
                            localStorage.setItem("estadoAtual", "4")
                            window.location.href="../";

                            </script>'; 
                            break;
                        case "Usuario":
                            echo'<script>
                            localStorage.setItem("estadoAtual", "5")
                            window.location.href="../";

                            </script>'; 
                            break;
                       
                    }
                    ?>