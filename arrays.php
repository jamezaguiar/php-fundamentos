<?php

$linguagens = ["Python", "PHP", "Javascript", "C#", "Java"]; // Forma mais moderna de declaração de array

$linguagens[] = "C++"; // Adiciona o novo valor no final do array já declarado

echo $linguagens[5];

$linguagens2 = array("Typescript", "Ruby", "Go"); // Forma mais antiga de declaração de array




$curso = ["Curso de PHP Fundamentos", 7.4, 40, true]; // Um array pode ter valores de todos os tipos

// O array abaixo é um 'Array Associativo'
$curso = [
  "nome_curso" => "Curso de PHP Fundamentos",
  "versao_ferramenta" => 7.4,
  "carga_horaria" => 40,
  "status" => true
];

// Array multidimensional
$numeros = [
  [1, 2, 3, 4],
  [5, 6, 7, 8, 9],
  [10, [11, 12, 13]]
];

// Array multidimensional associativo
$cursos = [
  "php" => [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true
  ],
  "python" => [
    "nome_curso" => "Curso de Python Fundamentos",
    "versao_ferramenta" => 3.8,
    "carga_horaria" => 40,
    "status" => true
  ]
];

echo $cursos["python"]["nome_curso"];