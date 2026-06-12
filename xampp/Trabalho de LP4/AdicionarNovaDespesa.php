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

$despesanova=$_POST['despesanova'];
$sql="INSERT INTO tipo_despesas (descricao) VALUES('$despesanova')";
if(mysqli_query($conexao, $sql))
{
    echo("Despesa inserida.");
}
else
{
    echo("Erro de inserção.");
}

mysqli_close($conexao);
?>