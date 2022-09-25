<html>
  <head>
    <title>Como impedir que certos campos fiquem em branco</title>
  </head>

  <body>
  
    <?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$regiao = $_POST['regiao'];
$opiniao = $_POST['opiniao'];
$receberEmail = $_POST['receberEmail'];
$escondido = $_POST['escondido'];

$mensagem_erro = "";
$erro = 0;


if($nome == ""){
  $erro = $erro +1;
  $mensagem_erro = $mensagem_erro . "- O campo [Nome] é de preenchimentoobrigatório. <br />";
}

if($email == ""){
  $erro = $erro +1;
  $mensagem_erro = $mensagem_erro . "- O campo [E-mail] é de preenchimento obrigatório. <br />";
}

  if($erro >=1){
    print "<h3>Seu formulário contém $erro erro(s) descrito(s)  a seguir: </h3>";
    print $mensagem_erro;
    print "<br /> <input type='button' value='Corrigir erros' onclick='javascript:history.go(-1)'>";
  }else{
    print "Nome: <strong> $nome</strong><br />";
    print "E-mail: <strong>$email</strong><br />";
    print "Sexo: <strong>$sexo</strong><br />";
    print "Região: <strong>$regiao</strong><br /><br />";
    print "Opinião: <strong>$opiniao</strong><br /><br />";
    print "Receber E-mail: <strong>$receberEmail</strong><br /><br />";
    print "Não visualizado pelo usuário: <strong>$escondido</strong><br /><br />";
  }

?>
    
  </body>
  
</html>