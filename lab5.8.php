<html>
  <head>
    <title>Como construir uma tabela de uma coluna de 1 linhas</title>
  </head>

  <body>

    <h2>Impressão de uma tabela com 1 coluna e 15 linhas</h2>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
    <?php
for($x = 1; $x <= 15; $x ++){
  print "<tr><td>&nbsp;</td></tr>";
}

//Desmenbrando tags td e tr
//outra maneira de fazer
// for($x = 1; $x <= 1; $x ++){
//print "<tr>";
//print "<td>&nbsp;</td>";
//print "</tr>";


//Criar uma variável para receber a tabela imppressa

//<?php
//$saida = " ";
//$saida = $saida . "<table width="100%" border="1" cellspacing='0' cellpadding='0'";
//for($x = 1; $x <= 1; $x++){
//$saida = $saida . "<tr>";
//$saida = $saida . "<td>&nbsp;</td>";
//$saida = $saida . "</tr>";
//$saida = $saida . "</table>";

//<h2>Impressão de uma tabela com 1 coluna e 15 linhas</h2>
/*<?php print $saida;?>*/
}

?>
</table>
  </body>
  
</html>