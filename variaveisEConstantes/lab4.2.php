<html>
  <head>
    <title>Expressões Aritméticas</title>
  </head>
  <body>

    <?php
$A= 50;
  $B= 30;
$C1 = $A + $B;
$C2 = pow($A, 2);
$C3 = $A + ($B * 2);
$X= round(Sqrt(5));
?>

    C1 = <?php print $C1; ?><br/>
    C2 = <?php print $C2; ?><br/>
    C3 = <?php print $C3; ?><br/>
    A raiz quadrada de  5 é: <?php print Sqrt(5); ?><br/>
    X = <?php print $X; ?><br/>

    <p>Esta é a minha página usando variáveis</p>
  </body>
</html>