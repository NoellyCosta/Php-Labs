<html>
  <head>
    <title>Como calcular umada "x" dias a partir da data atual</title>
  </head>

  <body>

    <h1>Uso da função strtotime() para calcular "x" dias a partir da data atual</h1>

    <?php 
print "Data atual (do servidor) : " . date("d/m/Y");
print "<br />";
print "<br/>";

$data_futura = strtotime("10 days");

print "data de hoje mais 10 dias:";
print date("d/m/Y", $data_futura);
print "br />";

$data_futura = strtotime("10 months");
print date("d/m/Y", $data_futura);
print "<br />";

$data_futura = strtotime("10 years");
print date("d/m/Y", $data_futura);
print "<br />";


$data_futura = strtotime("10 weeks");
print "data de hoje mais 10 semanas: ";
print date("d/m/Y", $data_futura);
print "<br />";
print "<br />";

$data_anterior = strtotime("-10 days");
print "data de hoje menos 10 dias: " . date("d/m/Y", $data_anterior);
print "<br />";

$data_anterior = strtotime("-10 months");
print "data de hoje menos 10 meses: "
. date("d/m/Y", $data_anterior);
print "<br />";

$data_anterior = strtotime("-10 years");
print "data de hoje menos 10 anos: "
.date("d/m/Y", $data_anterior);
print "<br />";

$data_anterior = strtotime("-10 weeks");
print "data de hoje menos 10 semanas: "
.date("d/m/Y", $data_anterior);
print "<br />";

?>

  </body>
</html>