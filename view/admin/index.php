<?php
session_start();
//include '../../controller/validaLogin.php';
//require_once '../models/usuarioDAO.php';
require_once '../../models/usuarioDAO.php';


$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();
echo "<br>";
echo "<table border='0' align='center'>";
echo "<tr>";
echo "  <th>ID</th>";
echo "  <th>Nome</th>";
echo "  <th>Senha</th>";
echo "  <th>E-mail</th>";
echo "  <th>Estado</th>";
echo "  <th>Situação</th>";
echo "  <th>Perfil</th>";
echo "  <th>Atualizar</th>";
echo "</tr>";


foreach ($usuarios as $u) {
    echo "<tr>";
    echo "  <td>{$u["id"]}</td>";
    echo "  <td>{$u["nome"]}</td>";
    echo "  <td>{$u["senha"]}</td>";
    echo "  <td>{$u["email"]}</td>";
    echo "  <td>{$u["link_temp"]}</td>";
    echo "  <td>{$u["situacao"]}</td>";
    echo "  <td>{$u["perfil_id"]}</td>";
    echo "  <td><a href='#'>alterar</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
<div id="page">
    <?php echo file_get_contents("teste.php"); ?>
</div>