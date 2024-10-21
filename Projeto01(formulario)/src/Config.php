<?php
namespace src;
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

class Config 
{
    
    public function send($data)
    {
        //Server settings
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '331d8e06a48ca1';
        $mail->Password   = '485e41f7a8f9ec';
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 2525;  
        
        //Recipients
        $mail->setFrom('claitondossantossilva@gmail.com', 'SUPORTE');
        $mail->addAddress($data['to'], $data['toName']);
        $mail->isHTML(true);
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];
        $mail->AltBody = $data['data'];


        return $mail->send() ? 'E-mail enviado com sucesso' : 'Erro ao enviar o E-mail';

    }
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$texto = $_POST["texto"];
$datetime = date('d/m/Y');

$mai = new Config();
$result = $mai->send([
    'to' => $email,
    'toName' => $nome,
    'subject' => 'E-mail: '.$nome."\n",
    'body' => $texto,
    'data'=> $datetime
]);

// var_dump($result);
header('location: index.php');
