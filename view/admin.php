<?php
include './controller/adminPGController.php';
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
        <form action="./controller/alterarUsuario.php" method="post" id="form1">
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?? null; ?>" />
            <label>Nome:</label><br />
            <input type="text" name="nome" class="campoEntrar" placeholder="Nome do usuario"
                value="<?php echo $nome ?? null; ?>" /><br />
            <label>Senha:</label><br />
            <input type="password" name="senha" class="campoEntrar" placeholder="senha do usuario"
                value="<?php echo $senha ?? null; ?>" /><br />
            <label>E-mail:</label><br />
            <input type="email" name="email" class="campoEntrar" placeholder="e-mail"
                value="<?php echo $email ?? null; ?>" /><br />
            <label>Codigo Temporario:</label><br />
            <input type="text" name="cod_temp" class="campoEntrar" placeholder="Codigo temporario"
                value="<?php echo $codTemp ?? null; ?>" /><br />
            <label>Diretorio Temporario:</label><br />
            <input type="text" name="dir_temp" class="campoEntrar" placeholder="diretorio temporario"
                value="<?php echo $dirTemp ?? null; ?>" /><br />
            <label>Link Temporario:</label><br />
            <input type="text" name="link_temp" class="campoEntrar" placeholder="link temporario"
                value="<?php echo $linkTemp ?? null; ?>" /><br />
            <label>Estado:</label><br />
            <input type="text" name="estado" class="campoEntrar" placeholder="Estado do login do usuario"
                value="<?php echo $estLogin ?? null; ?>" /><br />
            <label>Situação:</label><br />
            <select name="situacao" class="campoEntrar" value="situacao">
                <?php
                switch ($situacaoPerfil = $u["situacao"]) {
                    case "1":
                        echo "<option value='1' selected>" . $situacao = "Email verificado" . "</option>";
                        echo " <option value='2' >" . $situacao = "Excluida pelo usuario" . "</option>";
                        echo "<option value='3' >" . $situacao = "Excluida por ADM" . "</option>";
                        echo "<option value='4' >" . $situacao = "Verificar e-mail" . "</option>";
                        break;
                    case "2":
                        echo "<option value='1' >" . $situacao = "Email verificado" . "</option>";
                        echo " <option value='2' selected>" . $situacao = "Excluida pelo usuario" . "</option>";
                        echo "<option value='3' >" . $situacao = "Excluida por ADM" . "</option>";
                        echo "<option value='4' >" . $situacao = "Verificar e-mail" . "</option>";
                        break;
                    case "3":
                        echo "<option value='1' >" . $situacao = "Email verificado" . "</option>";
                        echo " <option value='2' >" . $situacao = "Excluida pelo usuario" . "</option>";
                        echo "<option value='3' selected>" . $situacao = "Excluida por ADM" . "</option>";
                        echo "<option value='4' >" . $situacao = "Verificar e-mail" . "</option>";
                        break;
                    default:
                        echo "<option value='1' >" . $situacao = "Email verificado" . "</option>";
                        echo " <option value='2' >" . $situacao = "Excluida pelo usuario" . "</option>";
                        echo "<option value='3' >" . $situacao = "Excluida por ADM" . "</option>";
                        echo "<option value='4' selected>" . $situacao = "Verificar e-mail" . "</option>";
                }
                ?>
            </select>
            <br />
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
            <br>
            <button class="botaoEntrar" type="submit" form="form1">Atualizar</button>
            <button class="botaoCancelar" type="submit" form="cancelarFormulario">Cancelar</button>

        </form>

        <form id="cancelarFormulario" action="" method="get">
            <input type="hidden" name="" value="#" />

        </form>
    </div>
    <?php
}



?>