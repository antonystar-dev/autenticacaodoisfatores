<?php

function dadosdeAcessoBD()
{
    if (!defined("HOST"))
        define("HOST", "localhost");
    if (!defined("BANCO"))
        define('BANCO', 'bd');
    if (!defined("USUARIO"))
        define('USUARIO', 'root');
    if (!defined("SENHA"))
        define('SENHA', "senha");

}

dadosdeAcessoBD();
// Create connection
$conn = new mysqli(HOST, USUARIO, SENHA, BANCO);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


abstract class Conexao
{

    private static $instance;

    /**
     * 
     * @return PDO
     */
    public static function getInstance()
    {
        dadosdeAcessoBD();
        $servernameBD = HOST;
        $dbnameBD = BANCO;
        $usernameBD = USUARIO;
        $passwordBD = SENHA;
        try {
            if (!isset(self::$instance)) {

                self::$instance = new PDO("mysql:host=$servernameBD;dbname=$dbnameBD;charset=UTF8", "$usernameBD", "$passwordBD");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}



class Banco
{

    /*   private static $dbNome = 'root';
      //private static $dbHost = $servernameBD;
      private static $dbUsuario = 'root';
      private static $dbSenha = ''; */

    private static $cont = null;
    public function __construct()
    {
        die('A função Init nao é permitido!');
    }

    public static function conectar()
    {

        if (null == self::$cont) {
            try {
                dadosdeAcessoBD();
                $servernameBD = HOST;
                $dbnameBD = BANCO;
                $usernameBD = USUARIO;
                $passwordBD = SENHA;
                self::$cont = new PDO("mysql:host=$servernameBD;dbname=$dbnameBD;charset=UTF8", "$usernameBD", "$passwordBD");
            } catch (PDOException $exception) {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>