<html>
  <head>
    <title>Como trabalhar com strings</title>
  </head>
  <body>

    <?php 
$A = "Hoje é o dia";
$B = "do meu aniversário";
?>

    Concatenando a variável A com a variável B : <br />
    <?php print $A.$B; ?>
<br /> <br />

    Retirando o espaço em branco à direita da variável A:<br />
<?php print rtrim($A) . $B; ?>
<br /> <br />
    
Contando o número de caracteres da variável B:<br />
    <?php print strlen($B); ?>
<br /><br />

    Transformando os caracteres da variável A para minúsculo: <br />
    <?php print  strtolower($A); ?>
<br /><br />

    Transformando os caracteres da variável A, concatenados com a variável B, para maiúsculo: <br />
    <?php print strtoupper($A) . strtoupper($B); ?>
<br /> <br />

    Retirando o acento agudo da letra "é" contida na variável A: <br />
    <?php print strtr($A, "é", "e");
?>
    
  </body>
</html>