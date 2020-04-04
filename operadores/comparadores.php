<?php

$a = 10;
$b = 20;

var_dump($a == $b);
var_dump($a != $b);
var_dump($a >= $b);
var_dump($a <= $b);
var_dump($a > $b);
var_dump($a < $b);

$c = "10";
$d = 10;

var_dump($c == $d); // Compara apenas valor
var_dump($c != $d); // Compara apenas valor
var_dump($c === $d); // Compara valor e tipo
var_dump($c !== $d); // Compara valor e tipo
