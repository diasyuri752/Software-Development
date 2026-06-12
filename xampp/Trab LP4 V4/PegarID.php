<?php
//Conexão com banco de dados
include("Conexao.php");

//Obtenção de dados
//Tipo de despesa
if(isset($_POST['despesa']))
{
    $despesa=$_POST['despesa'];
}

//Comando
$sql="SELECT ID FROM tipo_despesas WHERE Descricao='$despesa'";
$result = mysqli_query($conexao, $sql);
    
     while($fetch = mysqli_fetch_row($result))
    {
         echo  $fetch[0];
    }
    
?>
 