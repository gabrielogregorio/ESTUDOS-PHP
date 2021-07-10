<?php
# Requerimento
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

# PHPMailer => https://github.com/PHPMailer/PHPMailer

# Use um arquivo .env
$corpoMSG = "Mensagem de e-mail";
$email = "email@email.com";
$senha = "senha";
$host = "servidor.com";
$assunto = "Assunto e-mail";

# Carregamento da classe do phpmailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = "utf-8";
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->Debugoutput = 'html'; // Debug

$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = $host; // Server
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $email;
$mail->Password = $senha;
$mail->SetFrom($email);
$mail->Subject = $assunto;
$mail->Body = $corpoMSG;
$mail->AddAddress($email);

// Se vieir um arquivo
if(isset($_FILES['arquivo']))
{
    // Se o arquivo tem conteúdo
    if ($_FILES['arquivo']['size'] != 0 ) {

        // Adicione o arquivo no e-mail
        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
    }
}

// Tenta enviar um e-mail
if(!$mail->Send()) {
    echo("Erro ao enviar o e-mail");
} else {
    echo("Mensagem enviada com sucesso.");
}
?>