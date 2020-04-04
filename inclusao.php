<?php

echo "<br>Início do arquivo inclusao.php";

require_once "variaveis.php";

echo "<br>Estou mostrando a variável nome no arquivo inclusao.php: $nome";

require_once "funcoes/personalizadas.php";

echo "<br>Estou chamando a função somar no arquivo inclusao.php: ", somar(1, 2);

echo "<br>Fim do arquivo inclusao.php";

/**
 * Existem duas formas de incluir arquivos
 * include e require (os dois possuem a opção ONCE: include_once e require_once)
 * Isso faz com que um mesmo arquivo não seja importado duas vezes gerando erros
 * O require difere-se do include, por parar a execução do programa caso o arquivo que o dev tentou importar não exista.
 * 
 * Além disso, a recomendação é que os arquivos importados possuam ou apenas declarações, ou apenas exibições
 */