<html>
  <head>
    <title>Total de vendas por vendedor</title>
  </head>

  <body>
<?php
//Vetor com o nome dos vendedores

$nome_vendedor[1] = "Paulo";
$nome_vendedor[2] = "Valmir";
$nome_vendedor[3] = "Georgina";
$nome_vendedor[4] = "Cristina";


//Vetor com os valores de venda

$valor[1] = 45200;
$valor[2] = 125000;
$valor[3] = 75000;
$valor[4] = 28000;
//Total de vendas de todos os vendedores

for ($x = 1; $x <=4; $x ++){
  $total_vendas = $total_vendas + $valor[$x];
}

  print "<h3>Total de vendas no mês de agosto por vendedor</h3>";
//Exibe o total de vendas

print "Total geral: R$ " . $total_vendas . "<br /><br />";
print "<strong>Vendas por vendedor</strong><br />";

//Exibe o totalde vendas por vendedor
for($x = 1; $x <=4; $x++){
print $nome_vendedor[$x] . " - R$ " .$valor[$x] . "(" . $valor[$x]/$total_vendas*100 ."%)<br />";
}

?>
  </body>
  
</html>