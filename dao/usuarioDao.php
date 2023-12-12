<?php

include_once '../config/conexao.php';
include_once '../model/usuario.php';

class UsuarioDao {

    public function salvar(Usuario $user) {

       $sql = "INSERT INTO usuario (nome,email,cpf,senha,idade,sexo,estado) VALUES
       (:nome,:email,:cpf,:senha,idade,sexo,estado)";

       $stmt = Conexao::getConexao()->prepare($sql);
       $stmt->bindValue(":nome", $user->getNome(), PDO::PARAM_STR);
       $stmt->bindValue(":email", $user->getEmail(), PDO::PARAM_STR);
       $stmt->bindValue(":cpf", $user->getCPF(), PDO::PARAM_STR);
       $stmt->bindValue(":senha", $user->getSenha(), PDO::PARAM_STR);
       $stmt->bindValue(":idade", $user->getIdade(), PDO::PARAM_STR);
       $stmt->bindValue(":sexo", $user->getSexo(), PDO::PARAM_STR);
       $stmt->bindValue(":estado", $user->getEstado(), PDO::PARAM_STR);




       return $stmt->execute();
    }

    public function listar(){

        $sql = 'SELECT * FROM usuario';
        
        $stmt = conexao::getConexao()->query($sql);
        $lista= $stmt->fetchall(PDO::FETCH_ASSOC);

        $list =  array();
        
       foreach ($lista as $linha) {

        $list[] = $this->ListarUsuarios($linha);
       }

        return $list;
    }

    private function ListarUsuarios($linhas) {

    $user = new Usuario();
    $user->setID($linhas['id_usuario']);
    $user->setNome($linhas['nome']);
    $user->setEmail($linhas['email']);
    $user->setSenha($linhas['senha']);
    $user->setCPF($linhas['cpf']);

    return $user;
    }
}
?>