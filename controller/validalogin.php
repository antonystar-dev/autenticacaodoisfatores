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


if (is_file('../models/conexao/banco.php')) {
    require_once '../models/conexao/banco.php';
} else {
    require_once './models/conexao/banco.php';
}


$verifica = null;
if (!empty($_SESSION["id"])) {
    $verifica = $_SESSION["id"];
    $sql = "SELECT link_temp FROM usuarios WHERE id=$verifica ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($row["link_temp"] != "LOGADO") {
                echo "logof";
                session_destroy();
                $SessaoID = "UPDATE usuarios SET link_temp='DESLOGADO' WHERE id=$verifica ";
                if ($conn->query($SessaoID) === TRUE) {
                    //echo "enviou";
                }



            }

        }
    }
}


?>