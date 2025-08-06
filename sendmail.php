<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "senthamilraja555@gmail.com";
    $name = strip_tags($_POST["name"]);
    $email = strip_tags($_POST["email"]);
    $subject = strip_tags($_POST["subject"]);
    $message = strip_tags($_POST["message"]);

    $headers = "From: $name <$email>";

    $body = "You have received a new message from your portfolio:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>✅ Your message was sent successfully!</h2>";
    } else {
        echo "<h2>❌ Message could not be sent. Please try again later.</h2>";
    }
} else {
    echo "Invalid Request.";
}
?>
