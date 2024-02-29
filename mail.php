<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['sublect']; // Corrected the field name
    $message = $_POST['message'];

    $recipient = 'achinthaimesh653@gmail.com';
    $subject = 'New message from contact form';
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if (mail($recipient, $subject, $message, $headers)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Form</title>
            <link rel="stylesheet" href="style.css">
            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins&display=swap"
            rel="stylesheet">
        </head>
        <body>
        
            <div class="container">
                <h1>
                    Thank you for Contacting Me..! I will get back to you as soon as possible ..!!
                </h1>
                <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
            </div>
            
        </body>
        </html>';
    } else {
        echo "Error! Failed to send email.";
    }
} else {
    echo "Method not allowed.";
}
?>
