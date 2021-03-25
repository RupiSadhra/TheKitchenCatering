<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $from="info@kitchencatering.co.nz";
    $to="varinderjit17@gmail.com";

    $subject="Confirmation email";
    $message="Your message has been received. One of our team members will contact you shortly";
    $headers=$from;

    mail($to,$subject,$message,$headers);

    echo "Mail sent successfully";

?>