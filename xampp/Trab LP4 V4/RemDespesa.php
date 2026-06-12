<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Nova Despesa
if(isset($_POST['despesas']))
{
    $despesas=$_POST['despesas'];
}

//ID
if(isset($_POST['id']))
{
    $id=$_POST['id'];
}

//Verificação para saber se a despesa já está sendo utilizada
$sqlcheck="SELECT Valor FROM despesa WHERE ID_Despesa=$id";
if(mysqli_query($conexao, $sqlcheck))
{
    $nlinhas=mysqli_num_rows(mysqli_query($conexao, $sqlcheck));
    if($nlinhas==0)
    {
        $sql="DELETE FROM tipo_despesas WHERE Descricao='$despesas'";
        if(mysqli_query($conexao, $sql))
        {
            echo("Despesa removida com sucesso!");
        }
    }
    else
    {
        echo("Error! Despesa sendo utilizada nos registros.");
    }
}

//Fechar conexão com bando de dados
mysqli_close($conexao);
?>