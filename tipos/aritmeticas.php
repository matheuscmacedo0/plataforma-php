<div class="titulo">Operações Aritméticas</div>

<?php

echo 1+1;
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';

echo 1 + 2.5;
echo '<br>';
echo 10 - 2;
echo '<br>';
echo 2 * 5;
echo '<br>';
echo 7 / 4;
echo '<br>';
echo intdiv(7, 4);
echo '<br>';
echo round(7 / 4);
echo '<br>';
echo 7 % 4;
echo '<br>';
echo 7 % 2; //se o resultado for == 0 então é par
echo '<br>';
echo 7 / 0; //não da erro, da INFINITO
echo '<br>';
//echo intdiv(7, 0); #erro
echo 4 ** 2;  //potencia

//Precedência dos operadores
// () depois ** depois / * % depois + -

echo "<p>Precedência</p>";
echo 2 + 3 * 4;
echo '<br>';
echo (2 + 3) * 4;
echo '<br>';
echo 2 + 3 * 4 ** 2;
echo '<br>';
echo ((2 + 3) * 4) ** 2;


?>