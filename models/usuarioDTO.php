<?php

class UsuarioDTO {

    private $id;
    private $nome;
    private $senha;
    private $email;
    private $perfil_id;
    private $estLogin;
    private $situacaoConta;
    
      function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }
    function getEmail() {
        return $this->email;
    }

    function getPerfil_id() {
        return $this->perfil_id;
    }
    
    function getEstLogin() {
        return $this->estLogin;
    }
    
    function getSituacaoConta() {
        return $this->situacaoConta;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function setPerfil_id($perfil_id) {
        $this->perfil_id = $perfil_id;
    }
    
    function setEstLogin($estLogin) {
        $this->estLogin= $estLogin;
    }
    
    function setSituacaoConta($situacaoConta) {
        $this->situacaoConta= $situacaoConta;
    }
   
}
?>
