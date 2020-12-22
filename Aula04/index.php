<?php

$nome = "felipe";
echo $nome;
echo "<br>";
$nome .= " da silva";
echo $nome;
echo "<br>";

$valorTotal = 10;
echo $valorTotal;
echo "<br>";
$valorTotal += 20;
echo $valorTotal;
echo "<br>";
$valorTotal -= 10;
echo $valorTotal;
echo "<br>";
$valorTotal *= 20;
echo $valorTotal;
echo "<br>";
$valorTotal *= .2;
echo $valorTotal;
echo "<br>";

$valor1 = 15;
$valor2 = 20;

$soma = $valor1 + $valor2;
echo $soma;
echo "<br>";
$soma = $valor1 - $valor2;
echo $soma;
echo "<br>";
$soma = $valor1 * $valor2;
echo $soma;
echo "<br>";
$soma = $valor1 / $valor2;
echo $soma;
echo "<br>";
$soma = $valor1 % $valor2;
echo $soma;
echo "<br>";
$soma = $valor1 ** $valor2;
echo $soma;
echo "<br>";

var_dump($valor1);
echo "<br>";
var_dump($valor2);
echo "<br>";
var_dump($valor1 > $valor2);
echo "<br>";
var_dump($valor1 < $valor2);
echo "<br>";
var_dump($valor1 == $valor2);
echo "<br>";
var_dump($valor1 === $valor2);
echo "<br>";
var_dump($valor1 != $valor2);
echo "<br>";
var_dump($valor1 !== $valor2);
echo "<br>";
var_dump($valor1 <=> $valor2);
echo "<br>";


?>