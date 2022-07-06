<html>
  <head>
    <title>Como formatar a exibição de um CNPJ</title>
  </head>

  <body>

    <?php
$CNPJ = "11222333444455";
print  "CNPJ formatado: ";
print substr($CNPJ, 0, 2) . "." . substr($CNPJ, 2, 3) . "." .substr($CNPJ, 5, 3) . "/" .substr($CNPJ, 8, 4) . "-" .substr($CNPJ, 12, 2);
?>
  </body>
</html>