<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Minha primeira página com PHP</h1>
  <?php echo "Minha string vinda do PHP"; ?>

  <p>Estou no curso de <?php echo "PHP"; ?></p>
  <p>Estou no curso de <?= "PHP" ?></p>

  <p>10 mais 10 é igual a <?php echo 10 + 10; ?></p>
  <p>10 mais 10 é igual a <?= 10 + 10 ?></p>

  <?php
    echo "linha 1 <br>";
    echo "linha 2 <br>";
    echo "linha 3";
  ?>

</body>
</html>
