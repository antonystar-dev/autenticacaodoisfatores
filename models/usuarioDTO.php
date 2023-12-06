<?php

class UsuarioDTO
{

    private $id;
    private $nome;
    private $senha;
    private $email;
    private $cod_temp;
    private $dir_temp;
    private $link_temp;
    private $estLogin;
    private $situacaoConta;
    private $perfil_id;
    function getId()
    {
        return $this->id;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getSenha()
    {
        return $this->senha;
    }
    function getEmail()
    {
        return $this->email;
    }
        function getCodtemp()
    {
        return $this->codtemp;
    }
    function getDirtemp()
    {
        return $this->dirtemp;
    }
    function getLinktemp()
    {
        return $this->linktemp;
    }
    function getEstLogin()
    {
        return $this->estLogin;
    }
    function getSituacaoConta()
    {
        return $this->situacaoConta;
    }
    function getPerfil_id()
    {
        return $this->perfil_id;
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    
    function setCodtemp($cod_temp)
    {
        $this->codtemp = $cod_temp;
    }
    function setDirtemp($dir_temp)
    {
        $this->dirtemp = $dir_temp;
    }
    function setLinktemp($link_temp)
    {
        $this->linktemp = $link_temp;
    }
    function setEstLogin($estLogin)
    {
        $this->estLogin = $estLogin;
    }

    function setSituacaoConta($situacaoConta)
    {
        $this->situacaoConta = $situacaoConta;
    }
    function setPerfil_id($perfil_id)
    {
        $this->perfil_id = $perfil_id;
    }

    

}
?>