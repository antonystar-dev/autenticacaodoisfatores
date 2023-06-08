<?php
if (!isset($_SESSION["email"])) {
    
    //header("Refresh: 0;url=");
    echo "<script>
    let local=localStorage.getItem('estadoAtual');
   
    if (local==4 || local==5){
       
        login();
        window.location.reload(true);
    }
    
    </script>";

   
    
}


?>