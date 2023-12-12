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
    
 <table >
        <tr>
            <td> <a href="../index.html"> Inicio </a></td>
            <td> <a href="view/cadastro.html"> Cadastro </a></td>
            <td> <a href="view/listar.php"> Listas de Usuários </a></td>
            
        </tr>
    </table>
    <style>
    table{
        background-color: #fff;

     

    }
    table td a {
        padding: 10px;
        color: #000;
        font-size: 24px;
        text-decoration:none;
        border : 1px solid #000;
    }
    table a:hover{
        padding: 10px;
        color: #fff;
        font-size: 24px;
        
    }
    
</style>

    <?php 

    include_once 'config/conexao.php';

    
    include_once 'model/usuario.php';

    $user = new Usuario();

    $user->setNome("Alessandro");
    $user->setEmail("alee@gmail.com");

   

    ?>
 </td>
</tr>
</table>

<hr color="black" size="5"></hr>
<br>

<table align="left" > 
<tr> 
<td  bgcolor="WHITE"> <img src="img/nike.jpg" width="300" height="300">
</td>   
</tr>
<h2 align="left"> <th colspan="2">
<h4 align="left"><strong><font color="BLACK"><FONT FACE="arial"> Blusa de frio da Nike Black and White :</FONT></FONT></strong></h4>   
<h2 align="left"><strong><font color="BLACK">R$200,00</font></strong></h2>
<h2 align="left"> <input type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>
</table>

<h2 align="center"><img src="img/nikecamisa.jpg" width="200" height="300"></h2>
<h4 align="center"><strong><font color="BLACK"><FONT FACE="arial"> Blusa Casual da Nike :</FONT></FONT></strong></h4>
<h3 align="center"><strong><font color="BLACK">R$120,00</font></strong></h3>
<h2 align="center"> <th colspan="2">
<input href="view/cadastro.html" type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>  



<br>
<br>
<br>
<br>
<br>
<br>


<table align="left" > 
<tr> 
<td  bgcolor="WHITE"> <img src="img/conjunto.jpg" width="300" height="300">
</td>   
</tr>
<h2 align="left"> <th colspan="2">
<h4 align="left"><strong><font color="BLACK"><FONT FACE="arial"> Conjunto Blusa e Bermuda Nike:</FONT></FONT></strong></h4>   
<h2 align="left"><strong><font color="BLACK">R$279,00</font></strong></h2>
<h2 align="left"> <input type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>
</table>

<h2 align="center"><img src="img/bobo.jpg" width="300" height="300"></h2>
<h4 align="center"><strong><font color="BLACK"><FONT FACE="arial"> BoboJaco da Nike :</FONT></FONT></strong></h4>
<h3 align="center"><strong><font color="BLACK">R$399,00</font></strong></h3>
<h2 align="center"> <th colspan="2">
<input type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>  

<br>
<br>
<br>
<br>
<br>
<br>


<table align="left" > 
<tr> 
<td  bgcolor="WHITE"> <img src="img/bermuda.jpg" width="300" height="300">
</td>   
</tr>
<h2 align="left"> <th colspan="2">
<h4 align="left"><strong><font color="BLACK"><FONT FACE="arial"> Bermuda Casual Nike:</FONT></FONT></strong></h4>   
<h2 align="left"><strong><font color="BLACK">R$159,00</font></strong></h2>
<h2 align="left"> <input type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>
</table>

<h2 align="center"><img src="img/feminino.jpg" width="300" height="300"></h2>
<h4 align="center"><strong><font color="BLACK"><FONT FACE="arial"> Conjunto Moletom Feminino Nike:</FONT></FONT></strong></h4>
<h3 align="center"><strong><font color="BLACK">R$319,00</font></strong></h3>
<h2 align="center"> <th colspan="2">
<input type="submit" id="Comprar" name="Comprar" value="Comprar"/></th></h2>
<br><br>

<hr color="black" size="5"></hr>

</FONT>


</head>
<body>
    