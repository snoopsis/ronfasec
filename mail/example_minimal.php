<?php

require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo('tarantula.lan@gmail.com');
$mail->From('ronfasec@website.xyz');

$mail->Subject('Nova Mensagem do Website Ronfasec');
$mail->Body(
    '<h3>Mail message</h3>
    This is a <b>html</b> message.<br>
    Greetings!'
);

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';
