<?php

$result = '';
$fat = '';
if (isset($_POST['fat']))
{
	$fat = $_POST['fat'];

	$result = 1;
	for($i = $fat; $i > 1; $i--){
		$result *= $i; //$result=$result*$i;
	}
}
?>
<html>
<head>
	<title>Calculo do Fatorial</title>
</head>
<body>
<form method="post" action="fatorial.php">
Informe o número para o calculo
<input type="text" name="fat" value="<?php echo $fat?>" /><br />

Resultado: <input type="text" name="resultado" value="<?php echo $result;?>" disabled="disabled" /><br />
<input type="submit" name="aa" value="enviar" />
</form>
</body>
</html>
