<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Valor
if(isset($_POST['valor']))
{
    $valor=$_POST['valor'];
}

//Tipo de despesa
if(isset($_POST['despesa']))
{
    $despesa=$_POST['despesa'];
}

//Data de pagamento
if(isset($_POST['data']))
{
    $data=$_POST['data'];
}

//CPF
if(isset($_POST['cpf']))
{
    $cpf=$_POST['cpf'];
}

//ID
if(isset($_POST['id']))
{
    $id=$_POST['id'];
}

$default=random_int(0,500);

//Comando                        
$sql="INSERT INTO despesa(ID_Despesa, Data_Pag, Valor, CPF, ID) VALUES($id, '$data', '$valor', '$cpf', $default)";
mysqli_query($conexao, $sql);
 if(mysqli_affected_rows($conexao)==1)
 {
    echo("Despesa registrada com sucesso!");
 }
 else
{
    echo("Não foi possível fazer o registro.");
}

//Fechar conexão com bando de dados
mysqli_close($conexao);
?>