<?php
if (!isset($_SESSION["email"])) {
    
    header("Refresh: 0;url='index.html'");
    //echo "Sessão Expirada";

   
    
}


?>