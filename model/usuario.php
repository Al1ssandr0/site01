<?php

   class usuario {

    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $senha;

    function getID() {

        return $this->id;
    }

    function getNome() {

        return $this->nome;
    }

    function getEmail() {

        return $this->email;
    }

    function getCPF() {

        return $this->cpf;
    }

    function getSenha() {

        return $this->senha;
    }

    function setID($id) {

        $this-> id = $id;
    }

    function setNome($nome) {

        $this-> nome = $nome;
    }  

    function setEmail($email) {

        $this->email = $email;
    }

    function setCPF($cpf) {

        $this->cpf = $cpf;
    }

    function setSenha($senha) {

        $this->senha = $senha;
    }
}

?>