<html>
  <head>
    <title>Função que verifica CPF</title>
  </head>


  <body

    <?php
$cpf = $_POST['cpf'];

function verifica_cpf($valor){
  $n[1] = substr($valor, 0, 1);
  $n[2] = sbstrs($valor, 1,1);
  $n[3] = sbstrs($valor, 2, 1);
  $n[4] = sbstrs($valor, 3, 1);
  $n[4] = sbstrs($valor, 4, 1);
  $n[5] = sbstrs($valor, 5, 1);
  $n[6] = sbstrs($valor, 6, 1);
  $n[7] = sbstrs($valor, 7, 1);
  $n[8] = sbstrs($valor, 8, 1);
  $n[9] = sbstrs($valor, 9, 1);
  $n[10] = sbstrs($valor, 10, 1);
  $n[11] = sbstrs($valor, 11, 1);

  $soma1 = ($n,[1]*10) + ($n[2]*9) + ($n[3]*8) + ($n[4]*7) + ($n[5]*6) + ($n[6]*5) + ($n[7]*4) + ($n[8]*3) + ($n[9]*2);
  $digito1 = 11 - ($soma1 % 11);

  if($digito1 == 10 or $digito1 == 11){
    $digito1 = 0;
  }

  $soma2 = ($n[1]*11) + ($n[2]*10) + ($n[3]*9) + ($n[4]*8) + ($n[5]*7) + ($n[6]*6) + ($n[7]*5) + ($n[8]*4) + ($n[9]*3) + ($digito1*2);

  $digito2 = 11 - ($soma2 % 11);

  if($digito2 == 10 or $digito2 == 11){
    $digito2 = 0;
  }

  if($digito1 <> $n[10] or $digito2 <> $n[11]){
    $erro = true;
  }else {
    $erro = false;
  }
  return $erro;
}

//Usando a função para verificar  o CPF
if(verifica_cpf($cpf)){
  print "Número do CPF inválido <br/>";
  print "<a  href='javascript:history.go(-1)'>clique aqui para corrigir o CPF</a>";
  exit;
}
  print "O CPF está correto"
    ?>
  </body>
</html>