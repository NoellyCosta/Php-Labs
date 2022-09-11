<html>
  <head>
    <title>Exiba o dia da Semana</title>
  </head>

  <body>
    <?php 
if(date("w") == 0){
  $dia_da_semana = "Domingo";
}
  if(date("w") ==1){
    $dia_da_semana = "Segunda-feira";
  }
    if(date("w") == 2){
      $dia_da_semana = "Terça-feira";
    }
      if(date("w") ==3){
        $dia_da_semana = "Quarta-feira";
      }
        if(date("w") == 4){
          $dia_da_semana = "Quinta-feira";
        }
          if(date("w") == 5){
            $dia_da_semana = "Sexta-feira";
          }
            if(date("w") == 6){
              $dia_da_semana = "Sábado";
            }

              print ("<font 
face = 'arial' 
size='2'
color='red'> Olá pessoal! Sejam bem-vindos à minha página PHP</font></br>
");

print ("<font
face='arial'
size='2'
color='red'
<strong>Hoje é: $dia_da_semana<strong></font>
");

?>
  </body>
</html>