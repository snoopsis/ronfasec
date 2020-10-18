<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo('tarantula.lan@gmail.com', 'jaime1980@outlook.pt');
$mail->From('ronfasec@lavandaria.com');

$mail->Subject('Nova Mensagem do Website Ronfasec');
$mail->Body(
    '<br><strong>Nome: </strong>'.$nome
    .'<br><strong>Telefone: </strong>'.$telefone
    .'<br><strong>Email: </strong>'.$email
    .'<br><strong>Mensagem: </strong>'.$mensagem
);

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';


?>
