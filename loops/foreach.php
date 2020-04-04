<?php

$numeros = [2, 3, 5, 7, 9, 10];

foreach ($numeros as $chave => $valor) {
    echo "<br>Chave: {$chave} - Valor: {$valor}";
}

/**
 * Pode-se usar também o foreach sem pegar a chave
 * foreach ($numeros as $valor) {
 * echo "Valor: {$valor}";
 * }
 */
