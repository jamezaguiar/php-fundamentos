<?php

ini_set("display_errors", "1"); // Define MOSTRAR ERROS como TRUE
error_reporting(E_ALL); // Todos os erros do código serão reportados no navegador.

// O código abaixo gera um erro NOTICE, erro que não interromperá a execução do programa.
/* $valor1 = 10;
echo $valor; */

// O código abaixo gera um erro WARNING, erro um pouco mais grave do que o acima, mas que também não interromperá a execução do programa
/* $numero = NAO_EXISTE; */

// O código abaixo gera um erro FATAL, interrompendo a execução do programa.
/* function somar($valor1, $valor2)
{
  return $valor1 + $valor2;
}
function somar($valor1, $valor2)
{
  return $valor1 + $valor2;
} */

// O código abaixo gera um PARSE ERROR, erro de syntax, interrompe a execução do programa.
// echo "PHP"