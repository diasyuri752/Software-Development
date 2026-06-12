<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Nome
if(isset($_POST['nome']))
{
    $nome=$_POST['nome'];
}

//CPF
if(isset($_POST['cpf']))
{
    $cpf=$_POST['cpf'];
}

//Senha
if(isset($_POST['senha']))
{
    $senha=$_POST['senha'];
}

//Comando 
$sql="INSERT INTO pessoas VALUES ('$cpf', '$nome', '$senha')";
if(mysqli_query($conexao, $sql))
{
    if(mysqli_affected_rows($conexao)==1)
    {
        echo("Registro cadastrado com sucesso!");
    }
    else
    {
        echo("Error! Tente novamente mais tarde.");
    }
}

//Fechar conexão com bando de dados
mysqli_close($conexao);
?>