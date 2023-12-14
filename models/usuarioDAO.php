<?php
require_once 'conexao/banco.php';

class UsuarioDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = conexao::getInstance();
    }

    public function getAllUsuario()
    {
        try {
            //$sql = "SELECT id, nome, senha, email,perfil_id  from  usuarios Inner Join perfil  on usuarios.perfil_id = perfil.id";
            $sql = "SELECT id, nome, senha, email,cod_temp, dir_temp, link_temp, estado, situacao, perfil_id  from  usuarios";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "INSERT INTO usuarios(nome,senha,email,estado,situacao, perfil_id) 
                    VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getEmail());
            $stmt->bindValue(4, $usuarioDTO->getEstLogin());
            $stmt->bindValue(5, $usuarioDTO->getSituacaoConta());
            $stmt->bindValue(6, $usuarioDTO->getPerfil_id());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirUsuario($email)
    {
        try {
            $sql = "DELETE FROM usuarios 
                   WHERE email = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getUsuarioById($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateUsuarioById(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE usuarios SET nome=?,
                                       senha=?,
                                       email=?,
                                       cod_temp=?,
                                       dir_temp=?,
                                       link_temp=?,
                                       estado=?,
                                       situacao=?,
                                       perfil_id=?                    
                                       WHERE id= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getEmail());
            $stmt->bindValue(4, $usuarioDTO->getCodtemp());
            $stmt->bindValue(5, $usuarioDTO->getDirtemp());
            $stmt->bindValue(6, $usuarioDTO->getLinktemp());
            $stmt->bindValue(7, $usuarioDTO->getEstLogin());
            $stmt->bindValue(8, $usuarioDTO->getSituacaoConta());
            $stmt->bindValue(9, $usuarioDTO->getPerfil_id());
            $stmt->bindValue(10, $usuarioDTO->getId());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function autenticaUsuarioIdtemp(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE usuarios SET nome=?,
                                       senha=?,
                                       email=?,
                                       cod_temp=?,
                                       dir_temp=?,
                                       link_temp=?,
                                       estado=?,
                                       situacao=?,
                                       perfil_id=?                    
                                       WHERE id= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getEmail());
            $stmt->bindValue(4, $usuarioDTO->getEstLogin());
            $stmt->bindValue(5, $usuarioDTO->getSituacaoConta());
            $stmt->bindValue(6, $usuarioDTO->getPerfil_id());
            $stmt->bindValue(7, $usuarioDTO->getId());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
?>