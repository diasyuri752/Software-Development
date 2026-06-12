<?php
    $numero='';
    $result='';
    $aux='';
    $aux2=0;

    if(isset($_POST['numero']))
    {
        $numero=$_POST['numero'];
        if(isset($_POST['tipo']))
        {
            $aux=$_POST['tipo'];
            if($aux==1)
            {
                $result=1;
                for($i=$numero;$i>1;$i--)
                {
                    $result*=$i;
                }
            }
            else if($aux==2)
            {
                for ($i = 2; $i < $numero; $i++) 
                {
                    if ($numero % $i == 0) 
                    {
                        $aux2++;
                    }
                }   

                if($aux2==0)
                {
                    $result='O número é primo';
                }
                else
                {
                    $result='O número não é primo';
                }
            }  

        }
    }
?>
<html>
<head>
    <title>Form</title>
    <meta charset="UTF-8">
</head>
    <body>
        <form method="POST" action="teste.php">
            Informe um número: <input type="number" name="numero"> <br>
            Selecione uma opção: <input type="radio" name="tipo" value="1">Fatorial
            <input type="radio" name="tipo" value="2">Primo <br>
            Resultado: <input type="text" name="resultado" value="<?php echo $result;?>" disabled="disabled"> <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>


