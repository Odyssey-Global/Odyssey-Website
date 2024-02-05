<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // Now you can do whatever you want with this data, like saving it to a database or sending it via email
    // For example, you could send an email
    $to = "hi@unlimiteddesign.in";
    $subject = "New Inquiry";
    $messageBody = "Name: $fullName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Phone Number: $phoneNumber\n";
    $messageBody .= "Message: $message\n";

    // Send email
    mail($to, $subject, $messageBody);

    // Redirect user after form submission (optional)
    header("Location: thank_you_page.php");
    exit();
}
?>