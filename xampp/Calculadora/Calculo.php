<?php 

//mostrarnum
if(isset($_POST['valor']))
{
    $valor=$_POST['valor'];
    echo $valor;
}

//aoquadrado
if(isset($_POST['valor3']))
{
    $valor3=$_POST['valor3'];
    $aux=pow($valor3,2);
    echo $aux;
}

//aocubo
if(isset($_POST['valor4']))
{
    $valor4=$_POST['valor4'];
    $aux=pow($valor4,3);
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