<html>
  <head>
    <title>Como criar sua primeira função em PHP</title>
  </head>

  <body>
  
    <?php
function val_comissao($valor){
  $valor  = $valor  * 0.06;
  return $valor;
}

print  "Paulo vendeu R$25000 sua comissão é: R$ " . val_comissao(25000);
print "<br />";
print "Ana vendeu R$ 34540 sua comissão é: R$ " . val_comissao(34540);
print "<br />";
print "Silvia vendeu  R$12000 sua comissão é: R$ " . val_comissao(12000);
?>
    
  </body>
  
</html>