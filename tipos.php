<?php
echo "<br>";
$nome = "Jamerson Aguiar";
$idade = 22;
$peso = 84.20;
$estudando = true;

var_dump($nome, $idade, $peso, $estudando); // Função para mostrar informações relacionadas a uma variável

echo "<br>A variável nome é do tipo ";
echo gettype($nome); // Função que retorna tipo de variável

$nome = false;
echo "<br>A variável nome é do tipo ";
echo gettype($nome);
