<html>
  <head>
    <title>Como trabalhar com datas</title>
  </head>

  <body>
 para trabalhar com datas
    <h1>Uso  da função date()</h1>
 
  <?php 
print date("d, m, y");
print "<br />";
print date("d.m.y");
print "<br />";
print date("d/m/y");
print "<br />";
print date("d/m/Y");
print "<br />";
print date("d/n/Y");

print "<br />";
print date("j/n/Y");

print "<br /><br />";
print date("d/M/Y");
print "<br />";
print date("d/F/Y");

print "<br /><br />";
print "Hoje é o " . date("z") . " do ano. ";
print "<br />";
print "Faltam " . (365-date("z")) . "dias para acabar o ano.";

print "<br /><br />";
print "O dia da semana de hoje : " . date("1");

print "<br /><br />";
print  "O mês de " . date("F") . " tem " .date("t")  . " dias. ";

?>
  
  </body>
</html>