<?php

require_once './models/usuarioDAO.php';
//require_once './models/functions.php';

$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();
echo "<br>";
echo " <form method='GET' action=''>";
echo "<table border='0' align='center' class='tabelaAdmin'>";
echo "<tr>";
echo "  <th class='tituloTabela sumir'>ID</th>";
echo "  <th class='tituloTabela celular'>Nome</th>";
echo "  <th class='tituloTabela sumir'>Senha</th>";
echo "  <th class='tituloTabela'>E-mail</th>";
echo "  <th class='tituloTabela sumir'>Estado</th>";
echo "  <th class='tituloTabela celular'>Situação</th>";
echo "  <th class='tituloTabela sumir'>Perfil</th>";
echo "  <th class='tituloTabela'>Atualizar</th>";
echo "</tr>";
echo "<tr ><td colspan='8'><hr/></td><tr/>";


foreach ($usuarios as $u) {
    echo "<tr>";
    echo "<td class='colunaTabela1 sumir'>{$u["id"]}</td>";
    echo "  <td class='colunaTabela1 celular'>{$u["nome"]}</td>";
    echo "  <td class='colunaTabela1 sumir'>{$u["senha"]}</td>";
    echo "  <td class='colunaTabela1'>{$u["email"]}</td>";
    echo "  <td class='colunaTabela1 sumir'>{$u["estado"]}</td>";
    //echo "  <td>{$u["situacao"]}</td>";
    //bloqueiosPerfil(); arrumar a função aq
    switch ($situacaoPerfil = $u["situacao"]) {
        case "1":
            echo "  <td class='colunaTabela3 celular'>" . $situacao = "Email verificado" . "</td>";
            break;
        case "2":
            echo "  <td class='colunaTabela5 celular'>" . $situacao = "Excluida pelo usuario" . "</td>";
            break;
        case "3":
            echo "<td class='colunaTabela6 celular'>" . $situacao = "Excluida por ADM" . "</td>";
            break;
        default:
            echo "  <td class='colunaTabela4 celular'>" . $situacao = "Verificar e-mail" . "</td>";
    }

    if ($u["perfil_id"] == 1) {
        echo "<td class='colunaTabela7 sumir'>Administrador</td> ";
    } else {
        echo "<td class='colunaTabela8 sumir'>Usuario</td> ";
    }

    echo "  <td class='colunaTabela2'><button type='submit' class='botaoAlterarADM' onclick='editaUsuariopg({$u["id"]})'  name='at'value='{$u["id"]}'>Alterar</button></td>";
    echo "</tr>";
    //echo "<tr ><td colspan='8'><hr/></td><tr/>";

}
echo "</table>";
echo "</form>";

$idAltera = $_GET['at'] ?? null;

//colocar a outra conex~]ao aq
$sql = "SELECT * FROM usuarios WHERE id='$idAltera'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $id = $row["id"];
        $nome = $row["nome"] ?? null;
        $senha = $row["senha"] ?? null;
        $email = $row["email"] ?? null;
        $codTemp = $row["cod_temp"] ?? null;
        $dirTemp = $row["dir_temp"] ?? null;
        $linkTemp = $row["link_temp"] ?? null;
        $estLogin = $row["estado"] ?? null;
        $situacaoConta = $row["situacao"] ?? null;
        $idPerfil = $row["perfil_id"] ?? null;

    }

}


?>