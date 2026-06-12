<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Nova Despesa
if(isset($_POST['novad']))
{
    $novad=$_POST['novad'];
}
if(isset($_POST['cpf']))
{
    $cpf=$_POST['cpf'];
}

//Comando 
$sql="INSERT INTO despesa_pessoal (Descricao, CPF_Pessoa) VALUES('$novad','$cpf')";
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