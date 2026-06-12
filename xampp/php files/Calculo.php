<?php 
include("MathHelp.php");

//mostrarnum
if(isset($_POST['valor']))
{
    $valor=$_POST['valor'];
    echo $valor;
}

//igual
if(isset($_POST['valor2']))
{
    $valor2=$_POST['valor2'];
    $aux=new MathHelp();
    $aux2=$aux->calculate_str($valor2);
    echo $aux2;
}

//aoquadrado
if(isset($_POST['valor3']))
{
    $valor3=$_POST['valor3'];
    $aux=$valor3*$valor3;
    echo $aux;
}

//aocubo
if(isset($_POST['valor4']))
{
    $valor4=$_POST['valor4'];
    $aux=$valor4*$valor4*$valor4;
    echo $aux;
}

//raiz
if(isset($_POST['valor5']))
{
    $valor5=$_POST['valor5'];
    $aux=sqrt($valor5);
    echo $aux;
}

//fatorial
if(isset($_POST['valor6']))
{
    $valor6=$_POST['valor6'];
    $result=1;
        for($i=$valor6;$i>1;$i--)
        {
            $result*=$i;
        }
    echo $result;
}
?>