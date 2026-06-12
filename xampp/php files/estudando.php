<?php
$teste=array("Thiago", "Peter", "Pedro");

?>
<html><br></html>
<?php
foreach($teste as $test)
{
    echo $test;
}

$strings = ["apple", "orange", "banana", "coconut"];
echo($strings[0]."<br>");

function ask($str) 
{
    echo $str;
}
    ask("Hello world <br>");

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) 
    {
    echo "$value <br>";
    }

    define("MyDickSize", 16);
    echo MyDickSize."cm<br>";

    $text="oi";
    $text2="?";
    $text.=$text2;
    echo $text."<br>";

    class fruit
    {

    public function fruitname($name)
    {
        echo $name." é mt boda<br>";
    }

    }

    $apple=new fruit();
    $apple->fruitname("Maçã");

    echo "Minha linguagem favorita é $text <br>";

    date_default_timezone_set('America/Sao_Paulo');

    $today = date('d/m/y');
    echo $today."<br>";

    <script src="jquery-3.6.0.min.js"></script>         
<script src="Script.js"></script>


?>