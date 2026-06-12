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

$despesas=$_POST['despesas'];
$id=$_POST['id'];
$sqlid="SELECT valor FROM despesa WHERE despesaid=$id";
if(mysqli_query($conexao, $sqlid))
{
    $num=mysqli_num_rows(mysqli_query($conexao, $sqlid));
    if($num==0)
    {
        $sql="DELETE FROM tipo_despesas WHERE descricao='$despesas'";
        if(mysqli_query($conexao, $sql))
        {
            echo("Despesa removida.");
        }
    }
    else
    {
        echo("Erro. Despesa sendo usada.");
    }
}
mysqli_close($conexao);
?>