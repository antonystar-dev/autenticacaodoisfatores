<?php


switch ($situacaoPerfil) {
    case "4":
        $situação = "Conta desabilitada temporariamente";
        $emailconf="Reativar";
        break;
    case "2":
        $situação = "Conta excluida a pedido do usuario";
        $emailconf="Saiba mais";
        break;
    case "3":
        $situação = "Conta excluida por suspeita de golpe";
        $emailconf="Saiba mais";
        break;
    default:
        $situação = "confirmar a criação da conta";
        $emailconf= "Reenviar email";
}
?>


<div class="codigo">
    <h1 class="titulo">Situação do cadastro</h1>
    <hr />
    <h1><?php echo $situação; ?></h1>
    <h2><?php echo $emailconf; ?></h2>

</div>
