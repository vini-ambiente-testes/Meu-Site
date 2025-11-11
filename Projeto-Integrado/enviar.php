<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = trim($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST['mensagem']);

    if(empty($nome) || empty($email) || empty($mensagem)) {
        echo "<h3 style='text-align:center; color:red;'>Preencha todos os campos!</h3>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {

        $mail->CharSet = 'Utf-8';
        $mail->Encoding = 'base64';
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, $nome);

        $mail->addAddress('');

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem do formulario de contato';

        $mail->Body = "
        <b>Nome:</b> $nome<br>
        <b>E-mail:</b> $email<br>
        <b>Mensagem:</b><br> $mensagem";

    
        $mail->send();
        echo "<h3 style='text-align:center; margin-top: 50px;'>Email enviado com sucesso!</h3>";
    } catch (Exception $e) {
        echo "<h3 style='text-align:center; margin-top: 50px;color:red;'>Erro ao enviar: {$mail->ErrorInfo}!</h3>";
    }

    
}


?>