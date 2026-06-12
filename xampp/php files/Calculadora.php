<?php 
include("MathHelp.php");
$x=0;
//mostrarnum
if(isset($_POST['n1']))
{
    
    $valor=$_POST['n1'];
    if($valor=='1')
    $x=$x*10+1;

    echo $x;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <script src="jquery-3.6.0.min.js"></script> 
    <style>
        .fundo
        {
            height: 100%;
            position: absolute;
            background-color: black;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .botao
        {
            width: 50px;
            height: 50px;
            font-size: 25px;
        }
        .botaolimpar
        {
            width: 100px;
            height: 50px;
            font-size: 25px;
        }
        .result
        {
           margin-left: 2px;
            width: 204px;
            height: 50px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="fundo">
        <table>
            <div class="elementos">

            <tr>
            <input type="text" name="result" class="result" id="result" value= "" disabled="disabled">
            </tr>
        
            <tr>
            <td><input type="button" class="botao" name="btvoltar" value="<--" onclick="voltar()"></td>
            <td colspan="2"><input type="button" class="botaolimpar" style="margin-left: 2px ;" name="btlimpar" value="C" onclick="limpar()"></td>
            <td ><input type="button" class="botao" name="btadd" value="+" onclick="mostrarnum(btadd.value)"></td>
            </tr>

            <tr>
            <td><input type="button" class="botao" name="bt7" value="7" onclick="mostrarnum(bt7.value)"></td>
            <td><input type="button" class="botao" name="bt8" value="8" onclick="mostrarnum(bt8.value)"></td> 
            <td><input type="button" class="botao" name="bt9" value="9" onclick="mostrarnum(bt9.value)"></td> 
            <td><input type="button" class="botao" name="btsub" value="-" onclick="mostrarnum(btsub.value)"></td>
            </tr>

            <tr>
            <td><input type="button" class="botao" name="bt4" value="4" onclick="mostrarnum(bt4.value)"></td> 
            <td><input type="button" class="botao" name="bt5" value="5" onclick="mostrarnum(bt5.value)"></td> 
            <td><input type="button" class="botao" name="bt6" value="6" onclick="mostrarnum(bt6.value)"></td>
            <td><input type="button" class="botao" name="btmult" value="*" onclick="mostrarnum(btmult.value)"></td>
            </tr>

            <tr>
            <td><input type="button" class="botao" name="bt1" value="1" onclick="mostrarnum(bt1.value);"></td> 
            <td><input type="button" class="botao" name="bt2" value="2" onclick="mostrarnum(bt2.value)"></td> 
            <td><input type="button" class="botao" name="bt3" value="3" onclick="mostrarnum(bt3.value)"></td>
            <td><input type="button" class="botao" name="btdiv" value="/" onclick="mostrarnum(btdiv.value)"></td>
            </tr>

            <tr>
            <td><input type="button" class="botao" name="btponto" value="." onclick="(btponto.value)"></td>
            <td><input type="button" class="botao" name="bt0" value="0" onclick="mostrarnum(bt0.value)"></td> 
            <td><input type="button" class="botao" name="btpi" value="π" onclick="pi()"></td>
            <td><input type="button" class="botao" name="btraiz" value="√" onclick="raiz(result.value)"></td>
            </tr>

            <tr>
            <td><input type="button" class="botao" name="btao2" value="X²" onclick="aoquadrado(result.value)"></td>
            <td><input type="button" class="botao" name="btao3" value="X³" onclick="aocubo(result.value)"></td>
            <td><input type="button" class="botao" name="btn!" value="n!" onclick="fatorial(result.value)"></td>
            <td><input type="button" class="botao" name="btigual" value="=" onclick="igual(result.value)"></td>
            </tr>
                </div>
            </table>
        </div>
</body>
</html>

<!--JavaScript-->
<script>

//Função que adiciona elementos 
function mostrarnum(n1)
{
    document.getElementById("result").value=10;
}

</script> 
