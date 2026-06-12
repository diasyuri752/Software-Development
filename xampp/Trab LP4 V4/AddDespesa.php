<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Nova Despesa
if(isset($_POST['novad']))
{
    $novad=$_POST['novad'];
}

//Comando 
$sql="INSERT INTO tipo_despesas (Descricao) VALUES('$novad')";
if(mysqli_query($conexao, $sql))
{
    echo("Tipo de despesa inserida com sucesso!");
}
else
{
    echo("Não foi possível inserir a despesa.");
}

//Fechar conexão com bando de dados
mysqli_close($conexao);
?>