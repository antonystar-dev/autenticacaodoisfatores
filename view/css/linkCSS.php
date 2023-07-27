<?php
if (is_file('./models/functions.php')) {
    $caminho = "./view/";
} elseif (is_file('../../models/functions.php')) {
    $caminho = "../../view/";
} elseif (is_file('../models/functions.php')) {
    $caminho = "../view/";

} else {
    echo "falha ao carregar o css";
}
?>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/componentes.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/footer.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/layout.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/menu.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/textos.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $caminho; ?>css/admin.css'>