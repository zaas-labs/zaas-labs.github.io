<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];
    
    // Validation (you can add more robust validation)
    if (empty($name) || empty($email) || empty($service) || empty($message)) {
        echo "All fields are required.";
    } else {
        $to = "zaaslabs@gmail.com"; 
        $subject = "Contact Form Submission";
        $headers = "From: $email";
        $message = "Name: $name\nEmail: $email\nService: $service\nMessage:\n$message";
        
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message. Please try again later.";
        }
    }
}
?>
