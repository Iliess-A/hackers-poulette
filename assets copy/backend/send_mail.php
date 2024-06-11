<?php
function sanitize( $input ){
    return strip_tags( trim( $input) );

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST["name"]);
    $lastname = sanitize($_POST["lastname"]);
    $gender = sanitize($_POST["gender"]);
    $mail_address = sanitize($_POST["mail_address"]);
    $country = sanitize($_POST["country"]);
    $subject = sanitize($_POST["subject"]);
    $message = sanitize($_POST["message"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="./assets/js/script.js" ></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>hackers-poulette</title>
</head>
<body>
    <?php 
    echo $name;
    echo $lastname;
    echo $gender;
    echo $mail_address;
    echo $country;
    echo $subject;
    echo $message;
    ?>
</body>
</html>
