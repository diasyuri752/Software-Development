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
$sql="SELECT datapag, valor, descricao FROM despesa , tipo_despesas  WHERE despesa.despesaid=tipo_despesas.id AND despesa.cpf='$cpf'";
if(mysqli_query($conexao, $sql))
{
    if($result = mysqli_query($conexao, $sql))
    {
        while($fetch = mysqli_fetch_row($result))
        {
            echo $fetch[0] . " - " . $fetch[1] . ",00 - " . $fetch[2] . "\n";
        }
    }
    else
    {
        echo("Erro.");
    }
}
mysqli_close($conexao);
?>