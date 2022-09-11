<html>
  <head>
    <title></title>
  </head>

  <body>
    
<?php
$hoje = date("w");
$dia_da_semana[0] = "Domingo";
$dia_da_semana[1] = "Segunda-feira";
$dia_da_semana[2] = "Terça-feira";
$dia_da_semana[3] = "Quarta-feira";
$dia_da_semana[4] = "Quinta-feira";
$dia_da_semana[5] = "Sexta-feira";
$dia_da_semana[6] = "Sábado";

$nome_prato[0] = "Lasanha a quatro queijos";
$nome_prato[1] = "Frango ao molho madeira";
$nome_prato[2] = "Arroz a grega";
$nome_prato[3] = "Feijoada à moda da casa";
$nome_prato[4] = "Nhoque paulista";
$nome_prato[5] = "Bacalhau ao forno";
$nome_prato[6] = "Feijão branco";

$preco_prato[0] = "R$ 12,20";
$preco_prato[1] = "R$ 10,00";
$preco_prato[2] = "R$ 9,40";
$preco_prato[3] = "R$ 11,20";
$preco_prato[4] = "R$ 8,50";
$preco_prato[5] = "R$ 15,20";
$preco_prato[6] = "R$ 10,00";

print "A variável \$hoje contem o número: <strong>$hoje</strong><br/>";

print "Hoje é : <strong>$dia_da_semana[$hoje]</strong><br/>";

print "Nossa sugestão para hoje é: <strong>$nome_prato[$hoje]</strong><br/>";

print "Preço: <strong>$preco_prato[$hoje]</strong><br/>";

?>
  
  </body>
  
</html>