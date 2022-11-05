<html>

  <head>
    <title>Como criar uma página para executar as funções da biblioteca</title>
  </head>

  <body>
    <?php
include("myFunctions.php");

$numero1 = 30;
$numero2 = 56;
$numero3 = 120;
$nuero4 = 2;
$cnpj = "11222333000144";

print "A média aritimética dos números é: " . media($numero1, $numero2, $numero3, $numero4) . "<br />";

print "O CNPJ formatado é: " . formatar_cnpj($cnpj);
?>
  </body>
</html>