<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your_email@example.com"; // Update this with your email address

    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    $body = "<h2>New Message from Website Contact Form</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Phone:</strong> $phone</p>";
    $body .= "<p><strong>Subject:</strong> $subject</p>";
    $body .= "<p><strong>Message:</strong> $message</p>";

    if (mail($to, $subject, $body, $headers)) {
        // Redirect back to the form page with a thank you message
        header("Location: contact.php?status=success");
        exit;
    } else {
        // Redirect back to the form page with an error message
        header("Location: contact.php?status=error");
        exit;
    }
}
?>