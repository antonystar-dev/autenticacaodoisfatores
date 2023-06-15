<?php
require_once '../dao/conexao/banco.php';
session_start();
$verifica = $_SESSION["id"];
$sql = "SELECT link_temp FROM usuarios WHERE id=$verifica ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($row["link_temp"] == "LOGADO") {
            echo "logof";
            session_destroy();
            $SessaoID = "UPDATE usuarios SET link_temp='DESLOGADO' WHERE id=$verifica ";
            if ($conn->query($SessaoID) === TRUE) {
                //echo "enviou";
            }



        }

    }
}


session_destroy();
header("Refresh: 0;url='../'");
?>
