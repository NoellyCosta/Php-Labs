<html>
  <head>
    <title>Conversão de caracteres maiúsculas em minúsculas 
 sem acentuação e a impressão</title>
  </head>

  <body>


    <?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

function caixa_alta($campo){
  $campo = strtoupper($campo);
  $campo = str_replace("Ç", "C", $campo);
  $campo = str_replace("À", "A", $campo);
  $campo = str_replace("Ü", "U", $campo);
  $campo = str_replace("Á", "A", $campo);
  $campo = str_replace("É", "E", $campo);
  $campo = str_replace("Í", "I", $campo);
  $campo = str_replace("Ó", "O", $campo);
  $campo = str_replace("Ú", "U", $campo);
  $campo = str_replace("Ã", "A", $campo);
  $campo = str_replace("Õ", "O", $campo);
  $campo = str_replace("Â", "A", $campo);
  $campo = str_replace("Ê", "E", $campo);
  $campo = str_replace("Ô", "O", $campo);
  return $campo;
}

print "Você digitou no campo Nome: $nome <br/>";
print "O campo Nome em caixa alta sem acento é: " . caixa_alta($nome);
print "<br /><br />";
print "Você digitou no campo Endereço: $endereco em caixa alta sem acento é:  " . caixa_alta($endereco);
print "<br/><br/>";
print "Você digitou no campo Bairro: $bairro <br/>";
print "O campo Nome em caixa alta sem acento é: " . caixa_alta($bairro);
print "<br/><br/>";
print "Você digitou no campo Nome: $cidade <br/>";
print "O campo Nome em caixa alta sem acento é: " . caixa_alta($cidade);
?>
  </body>
</html>