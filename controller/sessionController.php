<?php

//Defina o tempo limite da sessão por 2 segundos
$timeout = 600;
//$timeout = 6;


// Defina o máximo de tempo da sessão
ini_set( "session.gc_maxlifetime", $timeout );

// Defina a vida útil do cookie da sessão
ini_set( "session.cookie_lifetime", $timeout );

// Inicie uma nova sessão
session_start();

// Defina o nome da sessão padrão
$s_name = session_name();

// Verifique se a sessão existe ou não
if(isset( $_COOKIE[ $s_name ] )) {
    setcookie( $s_name, $_COOKIE[ $s_name ], time() + $timeout, '/' );
    //echo date('H:i:s');
    //echo "Session foi criada para $s_name.<br/>";
   // echo session_id();
} else {
    ?>
     
    <script>
    //localStorage.setItem('mensagemNegativa', 'Seção expirada.');
    localStorage.setItem("estadoAtual", "3");
    window.location.reload(true);
    </script>"; 
   <?php
}
?>