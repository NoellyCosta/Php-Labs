<html>
  <head></head>
          <title>Como calcular o timestamp da data atual do servidor</title>

  <body>

    <h1>Retornando o timestamp da data atual do servidor</h1>

    
    <?php
print mktime(0, 0, 0, date("m"), date("d"), date("Y"));
?>
  </body>
  
</html>