<?php
//Conexão com banco de dados
$hostname="localhost";
$bancodedados="trab lp4";
$usuario="root";
$senha="";

$conexao=mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if(!$conexao)
{
    echo("Não foi possível estabelecer uma conexão com o banco de dados.");
}
?>