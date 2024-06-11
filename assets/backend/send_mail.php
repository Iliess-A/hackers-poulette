<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/src/Exception.php';
require 'phpMailer/src/PHPMailer.php';
require 'phpMailer/src/SMTP.php';

function sanitize( $input ){
    return strip_tags( trim( $input) );

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //here we will sinitize the entry data
    $name = sanitize($_POST["name"]);
    $lastname = sanitize($_POST["lastname"]);
    $gender = sanitize($_POST["gender"]);
    $mail_address = sanitize($_POST["mail_address"]);
    $country = sanitize($_POST["country"]);
    $subject = sanitize($_POST["subject"]);
    $message = sanitize($_POST["message"]);

    //here we will initialise and pass the right data for sending the mail(sender,subject,message)
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';//your adress mail
    $mail->Password = '';//application password connected to the email
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('iliessabdelmadjid@gmail.com');
    $mail->addAddress($mail_address);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo"
        <script>
        alert('sent succesfuly');
        document.location.href='../../index.php';
        </script>
    ";

}

