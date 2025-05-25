<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mazadul4x4@gmail.com";
    $subject = "New Comment Submission";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $website = htmlspecialchars($_POST['website']);
    $comment = htmlspecialchars($_POST['comment']);

    $message = "You received a new comment:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Website: $website\n";
    $message .= "Comment:\n$comment\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>