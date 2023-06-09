<?php

require_once 'banco.php';

class cadastroBD {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Banco::conectar();
    }

    public function cadastro($nome, $email, $senha) {
        try {
            //INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `cod_temp`, `dir_temp`, `link_temp`, `perfil_id`) VALUES (NULL, 'ccc', 'cccc', 'ccc', NULL, NULL, NULL, '2');
            $sql = "INSERT INTO (nome, senha, email, perfil_id) VALUE(???,'2')";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $senha);
           



            $stmt->execute();
            $cadastro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cadastro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>