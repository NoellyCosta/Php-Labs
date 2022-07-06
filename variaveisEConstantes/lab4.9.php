<html>
  <head>
    <title>Como trabalhar com horas</title>
  </head>

  <body>

    <h1>Uso da função date() para trabalhar com horas</h1>

<?php 
print "Agora são " . date("H:i:s") . " horas.";
print "<br />";

print "Agora são " . date("h:i:s") . " horas.";
print "<br />";

print "Agora são "  . date("g:i:s") . " horas.";
print "<br /><br />";
print "Agora são " . date("h:i:sa");

print "<br />";
print "<br />";

print "Agora são " . date("g:i:sA");
print "<br /><br />";

print "Agora são " . date("H:i") . " horas.";
print "<br /><br />";
?>


  </body>
</html>