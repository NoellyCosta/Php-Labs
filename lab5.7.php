<html>
  <head>
    <title>Como testar vários valores com a expressão switch</title>
  </head>

  <body>

    <?php
$departamento = "Cine & Foto";
print "<h2>Verificando o uso da expressão swicth</h2>";

Switch ($departamento) {
  case "Informática" :
  print "Be-vindo ao departamento de informática.";
  break;

  case "Esporte e lazer" : 
  print "Bem-vindo ao departamento de Esporte e Lazer";
  break;

  case "Moda" :
  print "Bem-vindo ao departamento de moda";
  break;

  case "Cine & Foto" :
  print "Bem-vindo ao departamento de Cine & Foto";
  break;

  case "Alimentos e Bebidas" :
  print "Bem-vindo ao departamento de Alimentos e Bebidas";
  break;
}

?>
  </body>
</html>