<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email address!";
    } else {
        // Save email to a text file (can be replaced with database)
        $file = fopen("subscribers.txt", "a");
        fwrite($file, $email . "\n");
        fclose($file);

        echo "✅ Thank you for subscribing, " . htmlspecialchars($email) . "!";
    }
}
?>
