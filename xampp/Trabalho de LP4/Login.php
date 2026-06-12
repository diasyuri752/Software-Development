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

$cpf=$_POST['cpf'];
$senha=$_POST['senha'];
$sql="SELECT nome FROM pessoas WHERE cpf='$cpf' AND senha='$senha'";
if(mysqli_query($conexao, $sql))
{
    $num=mysqli_num_rows(mysqli_query($conexao, $sql));
    if($num==1)
    {
        echo("Login verificado.");
    }
    else
    {
        echo("CPF ou Senha inválidos.");
    }
}
mysqli_close($conexao);
?>