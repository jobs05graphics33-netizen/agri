<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        echo "❌ Invalid input! Please fill all fields correctly.";
    } else {
        // Option 1: Save to file
        $file = fopen("messages.txt", "a");
        fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n----------------\n");
        fclose($file);

        // Option 2: Send via email (uncomment if mail is configured)
        // mail("youremail@example.com", "Contact Form Message", $message, "From: $email");

        echo "✅ Thank you, $name! Your message has been received.";
    }
}
?>
