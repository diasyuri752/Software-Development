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

$id=$_POST['id'];
$cpf=$_POST['cpf'];
$valor=$_POST['valor'];
$despesa=$_POST['despesa'];
$data=$_POST['data'];
$randomid=random_int(0,1250);                     
$sql="INSERT INTO despesa(despesaid, datapag, valor, cpf, id) VALUES($id, '$data', '$valor', '$cpf', $randomid)";
mysqli_query($conexao, $sql);
    if(mysqli_affected_rows($conexao)==1)
    {
        echo("Despesa registrada.");
    }
    else
    {
        echo("Erro de registro.");
    }
mysqli_close($conexao);
?>