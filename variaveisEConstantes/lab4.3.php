<html>
  <head>
    <title>Como trabalhar com variáveis e constantes</title>
  </head>
  <body>

    <?php 
define("pi", 3.1415926);
$raio = 5;
  $area = pi *pow($raio, 2);
?>

    A área do scirculo é: <?php print $area; ?><br/>

    <?php
$raio = 7;
$area = pi * pow($raio, 2);
?>

    A nova área do círculo é: <?php
print $area; ?><br />
  </body>
</html>