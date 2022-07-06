<html>
  <head>
    <title>Como contruir uma tabela de uma coluna e 20 linhas zebrada</title>
  </head>

  <body>

    <?php 
$saida = "";
$saida = $saida . "<table width='100%' border='1' cellspacing='0' cellpadding='0'>";

for($x = 1; $x <= 15; $x ++){
  $saida = $saida . "<tr>";
  if ($x % 2 == 0){
    $saida = $saida . "<td bgcolor='#C0COFF'> Esta é a linha $x (par) da tabela</td>";
  } else {
    $saida = $saida . "<td  bgcolor='#FFFFFF'>Esta é a linha $x (ímpar) da tabela</td>";
  }
  $saida = $saida . "</tr>";
}
$saida = $saida . "</table>";
?>

    <h2>Impressão de uma tabela zebrada com 1 coluna e 1 linhas</h2>
<?php print $saida; ?>
  </body>
</html>