<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="./assets/js/script.js" ></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>hackers-poulette</title>
</head>
<body>
    <main>
        <form method="post" action="./assets/backend/send_mail.php">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" title="Enter your name">

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Last name" title="Enter your last name">

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="whatever" name="gender" value="whatever">
            <label for="whatever">Whatever</label><br>

            <label for="mail_address">Enter your mail:</label>
            <input type="email" id="mail_address" name="mail_address" placeholder="your_mail@address.pls">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country">
            <label for="subject">Subject:</label>
            <input type="text" title="subject" id="subject" name="subject">
            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Your message"></textarea>

            <input type="submit" value="Submit">

        </form>
        </main>
</body>
</html>