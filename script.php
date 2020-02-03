<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $mensagem= $_POST['mensagem'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "lihkaroline6@gmail.com");
        $subject = "Enviado";
        $to = new SendGrid\Email(null, " leandro@calina.ag");
        $content = new SendGrid\Content("text/html", "Olá, $nome<br><br>Obrigado pelo interesse, em breve um consultor entrará em contato no e-mail abaixo.<br><br>$email<br><br>Atenciosamente<br>Rocket <3");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        
        header('Location: Sucesso.html');
        ?>
            Mensagem enviada com sucesso!
    </body>
</html>
