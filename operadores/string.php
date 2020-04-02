<?php

$escola = "Treinaweb";
$curso = "PHP";

$frase = "Faça o curso de " . $curso . " na escola " . $escola; // . é operador de concatenação



$string1 = "<br>Faça o curso de {$curso} na escola {$escola}!";
// Usando aspas duplas, o PHP interpreta variáveis, etc...
$string2 = '<br>Faça o curso de {$curso} na escola {$escola}!';

echo $string1;
echo $string2;