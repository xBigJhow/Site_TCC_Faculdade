<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de E-mail</title>
    <link rel="stylesheet" href="enviar_email_style.css">
</head>
<body>
    <div class="container">
        <h1>Envio de E-mail</h1>
        <p>
            <?php
            require 'vendor/autoload.php'; 

            $nome = isset($_POST["anonimo"]) ? "Anônimo" : $_POST["nome"];
            $email_form = isset($_POST["anonimo"]) ? "Anônimo" : (isset($_POST["email"]) ? $_POST["email"] : "");
            $telefone = isset($_POST["anonimo"]) ? "Anônimo" : (isset($_POST["telefone"]) ? $_POST["telefone"] : "");
            $mensagem = $_POST["mensagem"];
            $emailContentType1 = "<p><strong>Nome:</strong> $nome</p>";
            $emailContentType1 .= "<p><strong>E-mail:</strong> $email_form</p>";
            $emailContentType1 .= "<p><strong>Telefone:</strong> $telefone</p>";
            $emailContentType1 .= "<p><strong>Mensagem:</strong><br>$mensagem</p>";
            
            $emailContentType2 = "<p><strong>Nome:</strong><br>$nome</p>";
            $emailContentType2 .= "<p><strong>Mensagem:</strong><br>$mensagem</p>";
            
            $email = new \SendGrid\Mail\Mail(); 
            $email->addTo("saboronline2024@gmail.com", "Sabor Online");
            $email->setSubject("Formulário de Contato - Sabor Online");
            $email->setFrom("saboronline2024@gmail.com", "Sabor Online");
            
            if (isset($_POST["anonimo"]) && $_POST["anonimo"]) {
                $email->addContent("text/html", $emailContentType2);
            } else {
                $email->addContent("text/html", $emailContentType1);
            }
            
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email); 
                echo "Seu e-mail foi enviado com sucesso!";
            } catch (Exception $e) {
                echo 'Ocorreu um erro ao enviar o e-mail: ' . $e->getMessage();
            }
            ?>
        </p>
        <a href="index.php">Voltar para o site</a>
    </div>
</body>
</html>
