<?php

//include '../../controller/validaLogin.php';
//require_once '../models/usuarioDAO.php';
require_once './models/usuarioDAO.php';
//include './models/functions.php';


$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getAllUsuario();
echo "<br>";
echo " <form method='GET' action=''>";
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
echo "<tr ><td colspan='8'><hr/></td><tr/>";


foreach ($usuarios as $u) {
    echo "<tr>";
    echo "<td>{$u["id"]}</td>";
    echo "  <td>{$u["nome"]}</td>";
    echo "  <td>{$u["senha"]}</td>";
    echo "  <td>{$u["email"]}</td>";
    echo "  <td>{$u["link_temp"]}</td>";
    echo "  <td>{$u["situacao"]}</td>";

    if ($u["perfil_id"] == 1) {
        echo "<td>Administrador</td> ";
    } else {
        echo "<td>Usuario</td> ";
    }

    echo "  <td><button type='submit' onclick='editaUsuariopg({$u["id"]})'  name='at'value='{$u["id"]}'>Alterar</button></td>";
    echo "</tr>";
    echo "<tr ><td colspan='8'><hr/></td><tr/>";

}
echo "</table>";
echo "</form>";

$idAltera = $_GET['at'] ?? null;


$sql = "SELECT * FROM usuarios WHERE id='$idAltera'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $id = $row["id"];
        $nome = $row["nome"] ?? null;
        $senha = $row["senha"] ?? null;
        $email = $row["email"] ?? null;
        $estLogin = $row["link_temp"] ?? null;
        $situacaoConta = $row["situacao"] ?? null;
        $idPerfil = $row["perfil_id"] ?? null;

    }

}


if ($id ?? null != null) {
    //echo "não foi";
    ?>


    <div class="alterarDados">
        <h2>Dados do Usuario</h2>
        <label>Usuario: </label><label>
            <?php echo $nome ?? null; ?>
        </label><label> ID: </label><label>
            <?php echo $id ?? null; ?>
        </label>
        <form action="./controller/alterarUsuario.php" method="post" name="form1">
            <br>
            <label>Nome:</label><br />
            <input type="text" name="nome" class="campoEntrar" placeholder="Nome do usuario"
                value="<?php echo $nome ?? null; ?>" /><br />
            <label>Senha:</label><br />
            <input type="password" name="senha" class="campoEntrar" placeholder="senha do usuario"
                value="<?php echo $senha ?? null; ?>" /><br />
            <label>E-mail:</label><br />
            <input type="email" name="email" class="campoEntrar" placeholder="e-mail"
                value="<?php echo $email ?? null; ?>" /><br />
            <label>Estado:</label><br />
            <input type="text" name="link_temp" class="campoEntrar" placeholder="Estado do login do usuario"
                value="<?php echo $estLogin ?? null; ?>" /><br />
            <label>Situação:</label><br />
            <input type="text" name="situacao" class="campoEntrar" placeholder="Situação da conta"
                value="<?php echo $situacaoConta ?? null; ?>" /><br />
            <label>Perfil:</label><br />

            <select name="perfil_id" class="campoEntrar" value="perfil_id">
                <?php
                if ($idPerfil == 1) {
                    echo "<option value='1' selected>Administrador</option> ";
                    echo "<option value='2'>Usuario</option> ";
                } else {
                    echo "<option value='2' selected>Usuario</option> ";
                    echo "<option value='1'>Administrador</option> ";
                }
                ?>
            </select>
            <button class="botaoEntrar" type="submit">Enviar</button>
            
            <a href="?#"><button class="botaoCancelar">Cancela</button></a>
        </form>
        

    </div>
    <?php
}
//bloqueiosPerfil();
echo $situacao ?? null;


?>