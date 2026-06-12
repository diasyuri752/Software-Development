<?php

$result = '';
$num = '';

if (isset($_POST['escolha']))
{
    if ($_POST['escolha']=='1')
    {
        if (isset($_POST['n1']))
        {
            $num = $_POST['n1'];

            $result = 1;
            for($i = $num; $i > 1; $i--){
                $result *= $i; //$result=$result*$i;
            }
        }
    }
    else if ($_POST['escolha']=='2')
    {
        if (isset($_POST['n1']))
        {
            $num = $_POST['n1'];  //5
        
            $result = "eh primo";
            for($i = 2; $i<$num; $i++)
            {
                if ($num%$i==0)
                {
                    $result = "nao e primo"; 
                    break;
                }
            }
        }
    }
}
?>
<html>
<head>
	<title>Calculo do Fatorial</title>
</head>
<body>
<form method="post" action="fatorial_primo.php">
Informe o número para o calculo
<input type="text" name="n1" value="<?php echo $num?>" >
<input type="radio" name="escolha" value="1" checked>Fatorial
<input type="radio" name="escolha" value="2">Primo
<br>
Resultado: <input type="text" name="resultado" value="<?php echo $result;?>" disabled="disabled" /><br />
<input type="submit" name="aa" value="enviar" />
</form>
</body>
</html>
