<html>
  <head>
    <title>Como calcular uma data a partir de "x" dias de uma data qualquer </title>
  </head>

  <body>

    <h1>Uso da função mktime()</h1>

    <?php
$data_considerada = mktime(0, 0, 0, 9, 10, 2009);
$dias_futuros = 5;
$timestamp_converte = $data_considerada + 86400 *  $dias_futuros;

$nova_data = date("d/m/Y", $timestamp_converte);

print "Data considerada no cálculo: 10/09/2009  <br />";
print "Dias de acréscimo para o cálculo da nova data: " . $dias_futuros . "<br />";

print "Nova data acrescida de " . $dias_futuros . " dias: " . $nova_data;
?>
  </body>
</html>