<html>
  <head>
    <title> Como criar sua própria biblioteca de funções</title>
  </head>

  <body>

    <?php
//Função que calcula média entre 4 números

function media ($n1, $n2, $n3, $n4){
  $x = ($n1 + $n2 + $n3 + $n4)/4;
    Return $x;
}

//Funão formatar CNPJ

function formatar_cnpj($n){
  $cnpj_formatado = sbstr($n, 0, 2). ".".substr($n, 2, 3).".".substr($n, 5, 3). "/". substr($n, 8, 4). "-".substr($n, 12, 2);
  return $cnpj_formatado;
}
?>
  </body>
</html>