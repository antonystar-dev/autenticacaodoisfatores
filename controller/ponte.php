<?php 
if (is_file('../models/conexao/banco.php')) {
    require_once '../models/conexao/banco.php';
} elseif(is_file('../../models/conexao/banco.php')) {
    require_once '../../models/conexao/banco.php';
}else{
    require_once './models/conexao/banco.php';  
}

if (is_file('./models/functions.php')) {
    require './models/functions.php';
} elseif(is_file('../../models/functions.php')) {
    require '../../models/functions.php';
}else{
    require '../models/functions.php';
}

?>