<?php

$nome = 'Felipe';
$idade = 30;

//echo "Nome: " . $nome . " Idade: " . $idade;


$nome = "fulano da silva";

echo strtoupper($nome); //maiusculo
echo "<br>";
echo strtolower($nome); //minusculo
echo "<br>";
echo ucwords($nome); //primeiras maiusculas
echo "<br>";
echo ucfirst($nome); //somente a primeira maiuscula
echo "<br>";
$nome = str_replace("a", "@", $nome); //substitui a letra
echo $nome;
echo "<br>";

$frase = "teste de frase";
$q = strpos($frase, "frase");
var_dump($q);
echo "<br>";

$texto = substr($frase, 0, $q);
echo $texto;
echo "<br>";

echo strlen($frase);
echo "<br>";
?>