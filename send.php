<?php
session_start();

// 1. Security Check: Verify CSRF token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Security check failed. Please refresh the page and try again.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. Data Sanitization
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $type    = strip_tags(trim($_POST["subject_type"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // 3. Validation
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        die("Please complete the form and try again.");
    }

    // 4. Email Setup (Update your email here!)
    $recipient = "contact@zawwinhtun.com"; 
    $subject   = "[$type] New Message from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>\r\n";
    $email_headers .= "Reply-To: $email";

    // 5. Send and Redirect
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Clear token so form can't be resent by mistake
        unset($_SESSION['csrf_token']);
       // Redirect based on the subject type (which contains 'Myanmar' for MM requests)
        if (strpos($type, 'Myanmar') !== false) {
            header("Location: thank-you-mm.php");
        } else {
            header("Location: thank-you.php");
        }
        exit;
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    header("Location: contact.php");
    exit;
}