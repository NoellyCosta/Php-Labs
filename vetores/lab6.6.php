<html>
  <head>
    <title>Como aprimorar a exibição dos dados do exercicio 6.5</title>
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


//Total de vendas  de todos od vendedores
for($x = 1; $x <=4; $x++){
  $total_vendas = $total_vendas + $valor[$x];
}

print "<h3>Total de vendas no mês por vendedor</h3>";

//Exibe o total de vendas
print "Total geral: R$ " . number_format($total_vendas,2,',','.') . "<br /><br />";
print "<strong>Vendas por vendedor</strong><br />";

//Exibe o total de vendas por vendedor
for ($x = 1; $x <= 4; $x++){
  $largura_barra = 
  (round($valor[$x]/$total_vendas*100)) * 5;

  print $nome_vendedor=[$x] . 
    " - R$ " . number_format($valor[$x],2, ',', '.') . " (" . number_format(($valor[$x]/$total_vendas*100),2,',', '.') . "%)<br />";
}
?>
  </body>
  
</html>