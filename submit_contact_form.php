<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // reCAPTCHA secret key
    $secretKey = "6LcTiQoqAAAAABdPIQqVCkGMfk2L5-6QPlfamlB0";
    $captchaResponse = $_POST['g-recaptcha-response'];

    // Verify the reCAPTCHA response
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");
    $responseData = json_decode($verifyResponse);

    if (!$responseData->success) {
        $errors[] = "CAPTCHA verification failed. Please try again.";
        $_SESSION['errors'] = $errors;
        header("Location: contact.html");
        exit;
    }

    // Sanitize input
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES, 'UTF-8');

    // Validate input
    $errors = [];

    // Validate name (not empty and only contains letters and whitespace)
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed in the name.";
    }

    // Validate email (valid email format)
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate message (not empty)
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // Check for errors
    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header("Location: contact.html");
        exit;
    }

    $to = "info@becofchemicalslimited.com"; // Replace with the desired email address
    $subject = "New Contact Form Submission from " . $name;
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message . "\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        error_log("Failed to send message from: $email, subject: $subject");
        echo "Failed to send message. Please try again later.";
    }
}
