<?php

$divisor = 0;

try {
  if ($divisor === 0) {
    throw new Exception("Não é possível dividir por 0.", 1);
  }
  $valor = 100 / $divisor;
} catch (\Throwable $th) {
  echo $th -> getMessage();
}

$valor = 100 / $divisor;
