<?php

$valor = "15";
var_dump($valor);
echo "<br>";

$valor = $valor + 5;
var_dump($valor);
echo "<br>";

$valor = $valor + 5.7;
var_dump($valor);
echo "<br>";


$valor2 = 25 + "15";
var_dump($valor2);
echo "<br>";

$valor3 = 25 + "15a";
var_dump($valor3);
echo "<br>";

$a = 10;
echo "<br>";
var_dump($a);

$a = (string) 10;
echo "<br>";
var_dump($a);

$b = 10;
echo "<br>";
var_dump($b);
settype($b, "string");
echo "<br>";
var_dump($b);


?>