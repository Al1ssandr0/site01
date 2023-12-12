<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nike </title>
    <!DOCTYPE html>
<html>
<head>
<title> HIGHSTREET </title>
<meta charset="utf-8"/>   

<FONT FACE="arial">
<body bgcolor="WHITE">
    
<h1 align="center"><font color="BLACK"><FONT FACE="arial">NIKE</font> </FONT></h1>
<table align="center" border="1">
<tr align="center">
 <td colspan="4" align="right">

<style>

    table, td {
        border: 1px solid #000;
        font-size: 20px;
  
    }

</style>

<body>
    <h1> Listar usuarios cadastrados <h1>
        <table>
            <tr>
                <td> ID </td>
                <td> Nome </td>
                <td> Email </td>
                <td> CPF </td>
                <td> Senha </td>
            </tr>

            <?php

            include_once '../dao/usuarioDao.php';

            $userDao = new UsuarioDao();

            ?>

            <?php  foreach ($userDao->listar() as $user) : ?>

            <tr>
                <td> <?= $user->getID(); ?> </td>
                <td> <?= $user->getNome(); ?> </td>
                <td> <?= $user->getEmail(); ?> </td>
                <td> <?= $user->getCPF(); ?> </td>
                <td> <?= $user->getSenha(); ?> </td>
            </tr>

            <?php endforeach ?>

        </table>
    
</body>
</html>