<?php

require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo('__EMAIL__');
$mail->From('__EMAIL__');

$mail->Subject('Nova Mensagem do Website Ronfasec');
$mail->Body(
    '<h3>Mail message</h3>
    This is a <b>html</b> message.<br>
    Greetings!'
);

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';
