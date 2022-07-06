<html>
  <head>
    <title>Como calcular o número entre duas datas</title>
  </head>

  <body>

    <h1>Cálculo da diferença de dias entre duas datas</h1>

    <?php

$dia1 = "05";
$mes1 = "09";
$ano1 = "2009";

$dia2 = "15";
$mes2 = "09";
$ano2 = "2009";

$timestamp_data1 = mktime(0, 0, 0, $mes1, $dia1, $ano1);
$timestamp_data2 = mktime(0, 0, 0, $mes2, $dia2, $ano2);
$dif_dias = ($timestamp_data2 - $timestamp_data1) / 86400;

print "Data inicial: " . $dia1 . "/" . $mes1 . "/" . $ano1;
print "<br />";

print "Data final: " . $data2 . "/" . $mes2 . "/" . $ano2;
print "<br />";

print "Entre " . $dia1 . "/" . $mes1 . "/" . $ano1 . " e " . $dia2 . "/" . $mes2 . "/" . $ano2 . " existem " . $dif_dias . " dias.";

?>
  </body>
</html>