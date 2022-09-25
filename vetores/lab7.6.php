<html>
  <head>
    <title> Formulario exemplo</title>
  </head>

  <body>

    <form method="post" action="Lab7_6R.php">
      Nome:
      <input type="text" name="nome">
      <br />
      E-mail:
      <input type="text" name="email">
      <br />
      Sexo:
      <input type="radio" value="M"> Masculino
      <input type="radio" value="F"> Feminino
      <br />
      Em qual região da cidade você mora :
      <select name="regiao">
        <option value="Sul">Sul</option>
        <option value="Norte">Norte</option>
        <option value= "Oeste">Oeste</option>
        <option value="Leste">Leste</option>
        <option value="Centro">Centro</option>
      </select>
      <br /> <br />
      Opine sobre esta seção:
      <br />
      <textarea name="opiniao" cols="50" rows="7"></textarea>
      <br /> <br />
      <input type="checkbox" name="receberEmail" value="Sim">Desejo receber informações sobre atualização do site.
      <br /> <br />
      <input type="submit" name="submit" value="Enviar">
      <input type="reset" name="submit2" value="Limpar dados">
      <input type="hidden" name="escondido" value="Formulário de avaliação">
    </form>
    
    
  </body>
  
</html>