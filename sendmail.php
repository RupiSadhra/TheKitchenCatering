<?php
require_once('./phpmailer/PHPMailerAutoload.php');
$mail=new PHPMailer();

$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->isSMTP();

$mail->Username="varinderjit17@gmail.com";
$mail->Password="MANvir786@";

$mail->setFrom('varinderjit17@gmail.com','TheKitchenCatering');
$mail->addAddress('codewithrupi@gmail.com');
$mail->addReplyTo('varinderjit17@gmail.com');

$mail->isHTML(true);
$mail->Subject="Confirmation email";
$mail->Body="<h1>Confirmation email from The Kitchen Catering<h1>";


if(!$mail->send())
{
    echo "Message could not be sent";
}

else
{
    echo "Message sent";
}
?>
