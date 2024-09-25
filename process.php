<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can process the data here, such as saving it to a database or sending an email
    // Example: Send an email (requires a configured mail server)
    $to = "sudheervaddi08@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
