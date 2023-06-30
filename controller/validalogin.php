<?php
if (is_file('./controller/ponte.php')) {
    require './controller/ponte.php';
} else {
    require '../controller/ponte.php';
}


if (!isset($_SESSION["email"])) {
    echo "<script>
let local=localStorage.getItem('estadoAtual');


if (local==4 || local==5){
   
    login();
    window.location.reload(true);
}

</script>";

}
if (is_file('./models/functions.php')) {
    $caminho = ".";
} elseif (is_file('../../models/functions.php')) {
    $caminho = "../../";
} elseif (is_file('../models/functions.php')) {
    $caminho = "..";

} else {
    echo "falha ao carregar o css";
}
situacaoLogin();
if ($situacaoPerfil != "1" && $idverificador != null) {
    echo "<script>
window.location.replace('$caminho/view/login-inativo.php');
</script>";

} 
//carregaPerfil();

$verifica = null;
if (!empty($_SESSION["id"])) {
    $verifica = $_SESSION["id"];
    $sql = "SELECT estado FROM usuarios WHERE id=$verifica ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($row["estado"] != "LOGADO") {
                //echo "logof";
                session_destroy();
                $SessaoID = "UPDATE usuarios SET estado='DESLOGADO' WHERE id=$verifica ";
                if ($conn->query($SessaoID) === TRUE) {
                    //echo "enviou";
                }
            }
        }
    }
}
?>