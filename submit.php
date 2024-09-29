<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    // Compose the email
    $to = "animalallies11@gmail.com";
    $subject = "Injured Animal Report";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nLocation: $location\nMessage: $message";
    
    // Send the email
    $headers = "From: $email";
    $success = mail($to, $subject, $email_body, $headers);
    
    if ($success) {
        echo "Thank you for reporting an injured animal. We will get in touch with you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
