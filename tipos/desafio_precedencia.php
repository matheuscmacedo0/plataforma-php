<div class="titulo">Desafio Precedência</div>

<?php

echo '<p>Qual valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
//Resultado: INF

echo '<p>Qual expressão imprime o valor 100?</p>';
echo 'a)', (1 + 2) * 20 - 15;//45
echo 'b)', 4 * 5 ** 2; //100
echo 'c)', 2 ** 3 ** 4 / 1e25;//tende a zero
echo 'd)', 3 + (3 * 8) / 2 - 3;//12

?>