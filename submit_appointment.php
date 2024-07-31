<?php
// Define the recipient email address
$recipient = "21stcenturyae@gmail.com";

// Get form data
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$health = htmlspecialchars($_POST['health']);
$email = htmlspecialchars($_POST['email']);
$doctor = htmlspecialchars($_POST['doctor']);
$date = htmlspecialchars($_POST['date']);

// Subject of the email
$subject = "New Appointment Request";

// Email content
$message = "
<html>
<head>
    <title>New Appointment Request</title>
</head>
<body>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Health Type:</strong> $health</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Selected Doctor:</strong> $doctor</p>
    <p><strong>Preferred Date:</strong> $date</p>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";

// Send email
if (mail($recipient, $subject, $message, $headers)) {
    echo "Appointment request sent successfully.";
} else {
    echo "Failed to send appointment request.";
}
?>
