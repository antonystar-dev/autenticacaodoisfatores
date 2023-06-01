<?php

require_once '../banco.php';

class LoginBD {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Banco::conectar();
    }

    public function login($email, $senha) {
        try {
            $sql = "SELECT usuarios.nome,usuarios.email,usuarios.id, perfil.perfilcol FROM `usuarios` INNER JOIN perfil on usuarios.Perfil_id = perfil.id WHERE email=? and senha=? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
           



            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>