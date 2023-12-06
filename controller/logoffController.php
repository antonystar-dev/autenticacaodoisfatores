<?php
if (is_file('./controller/ponte.php')) {
    require './controller/ponte.php';
} else {
    require '../controller/ponte.php';
}
session_start();
$verifica = $_SESSION["id"];
$sql = "SELECT estado FROM usuarios WHERE id=$verifica ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($row["estado"] == "LOGADO") {
            //echo "logof";
            session_destroy();
            $SessaoID = "UPDATE usuarios SET estado='DESLOGADO' WHERE id=$verifica ";
            if ($conn->query($SessaoID) === TRUE) {
                //echo "enviou";
            }



        }

    }
}

session_destroy();
header("Refresh: 0;url='../'");
?>
