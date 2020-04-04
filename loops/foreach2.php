<?php

$cursos = [
  "java" => [
    "nome_curso" => "Curso de Java Fundamentos",
    "versao_ferramenta" => 11.4,
    "carga_horaria" => 40,
    "status" => true
  ],
  "php" => [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => false
  ],
  "python" => [
    "nome_curso" => "Curso de Python Fundamentos",
    "versao_ferramenta" => 3.8,
    "carga_horaria" => 40,
    "status" => true
  ]
];

foreach ($cursos as $chave => $valor) {
    if ($valor["status"] == false) {
        //continue;
        break;
    }
    echo "<br>Chave: {$chave} - Valor: {$valor}";

    foreach ($valor as $key => $value) {
        echo "<br>Key: {$key} - Value: {$value}";
    }
}
