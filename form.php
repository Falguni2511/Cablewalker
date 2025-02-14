<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    // Replace with your email address
    $to = "dayanandbharti1018@gmail.com";
    
    $subject = "New Inquiry from $name";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "phone: $phone\n";
    $mailBody .= "Message:\n$message";
    
    // Send the email
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your inquiry!";
    } else {
        echo "Error sending email.";
    }
}
?>
