<?php

$razao = addslashes($_POST['razao']);
$cnpj = addslashes($_POST['cnpj']);
$representante =  addslashes($_POST['representante']);
$telefone = addslashes($_POST['telefone']);
$email =  addslashes($_POST['email']);
$mensagem =  addslashes($_POST['mensagem']);

$to = "victorfclima@gmail.com";
$subject = "Olá, gostaria de me tornar um revendedor Potiguar Prime!";
$body = "Razão Social: ".$razao. "\r\n".
        "CNPJ: ".$cnpj. "\r\n".
        "Representante: ".$representante. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "E-mail: ".$email. "\n".
        "Mensagem: ".$mensagem;
$header = "From: victorfclima@gmail.com"."\r\n".
          "Reply-To:$email".
          "\e\n".
          "X=Mailer:PHP/".phpversion();

          if(mail($to,$subject,$body,$header)){

              echo("Email enviado com sucesso");
              
          } else {

            echo("Email não pôde ser enviado");

          }

?>