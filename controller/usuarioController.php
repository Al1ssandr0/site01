<?php

include_once '../model/usuario.php';
include_once '../dao/usuarioDao.php';

$dados = filter_input_array(INPUT_POST);

$user = new Usuario();
$userDao = new UsuarioDao();



if(isset($_POST['cad'])) {

    $user->setNome($dados['nome']);
    $user->setEmail($dados['mail']);
    $user->setCPF($dados['cpf']);
    $user->setSenha($dados['senha']);
    $user->setIdade($dados['idade']);
    $user->setSexo($dados['sexo']);
    $user->setEstado($dados['estado']);


   
   /// echo var_dump($dados);

$userDao->salvar($user) {
else {
    echo '<script type="text/javascript">
    alert("erro ao tentar cadastrar !");
    location.href="../view/cadastro.html";
    </script>';
   }

}



?>