<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';

echo isset($soma);

unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora eu sou uma string";
echo '<br>' . $variavel;

//Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida'; //evitar acentos
// $6var = 'invalida';
// $%7var = 'invalida';
// $var8% = 'invalida';

echo '<br>';

?>