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

$despesa=$_POST['despesa'];
$sql="SELECT ID FROM tipo_despesas WHERE Descricao='$despesa'";
$result = mysqli_query($conexao, $sql);
    while($fetch = mysqli_fetch_row($result))
    {
        echo  $fetch[0];
    }
mysqli_close($conexao);
?>
 