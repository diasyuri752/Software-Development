<?php
//Conexão com banco de dados
include("Conexao.php");
//Obtenção de dados
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
$sql="SELECT Nome FROM pessoas WHERE CPF='$cpf' AND Senha='$senha'";
if(mysqli_query($conexao, $sql))
{
    $nlinhas=mysqli_num_rows(mysqli_query($conexao, $sql));
    if($nlinhas==1)
    {

        echo("Login verificado com sucesso!");
        session_start();
        $_SESSION['cpf']=$cpf;
    }
    else
    {

        echo("CPF ou Senha incorretos.");
    }
}


//Fechar conexão com bando de dados
mysqli_close($conexao);
?>
