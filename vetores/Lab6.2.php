<html>
  <head>
    <title>Vetores Página dia Da Semana</title>
  </head>

  <body>
  <?php
$dia_da_semana[0] = "Domingo";
$dia_da_semana[1] = "Segunda-feira";
$dia_da_semana[2] = "Terça-feira";
$dia_da_semana[3] = "Quarta-feira";
$dia_da_semana[4] = "Quinta-feira";
$dia_da_semana[5] = "Sexta-feira";
$dia_da_semana[6] = "Sábado";

print "Hoje é:";
print $dia_da_semana[date("w")]

  ?>
  </body>
</html>