<?php
$hostname="localhost";
$bancodedados="trabalho de lp4";
$usuario="root";
$senha="";
$conexao=mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if(!$conexao)
{
    echo("Erro de conexão.");
}

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];
$sql="INSERT INTO pessoas VALUES ('$cpf', '$nome', '$senha')";
if(mysqli_query($conexao, $sql))
{
    if(mysqli_affected_rows($conexao)==1)
    {
        echo("Registro inserido.");
    }
    else
    {
        echo("Erro de registro.");
    }
}
mysqli_close($conexao);
?>