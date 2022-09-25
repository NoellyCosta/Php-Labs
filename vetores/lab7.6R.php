<html>
  <head>
    <title> Como recuperar dados com a superglobal$_POST</title>
  </head>

  <body>
    
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$região = $_POST['regiao'];
$opiniao = $_POST['opiniao'];
$receberEmail = $_POST['receberEmail'];
$escondido = $_POST['escondido'];

print "Nome: <strong>$nome</strong><br />";
print "E-mail: <strong>$email</strong><br />";
print "Sexo: <strong>$sexo</strong><br />";
print "Região: <strong>$regiao</strong><br /><br />";
print "Opinião<br />";
print "<strong>$opiniao</strong><br /><br />";
print "Receber E-mail: <strong>$receberEmail</strong><br /><br />";
print "Não visualizado pelo usuário: <strong>$escondido<strong><br /> <br />";
?>

    
    
    
  </body>
  
</html>