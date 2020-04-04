<?php

$a = 11;
$b = 21;

if ($a > $b) {
    echo "Realmente A é maior do que B";
} elseif ($b == 20) {
    echo "B é igual a 20";
} elseif ($a == 10) {
    echo "A é igual a 10";
} else {
    echo "Nenhuma condição é verdadeira";
}

/*
 * O if também pode ser usado sem bloco de código, considerando apenas a primeira linha
 *  if ($a > $b) echo "Realmente A é maior do que B";
 * Por boas práticas, é melhor usar a primeira opção
*/
