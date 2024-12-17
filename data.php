<?php
// Include the database connection
include('db.php');

// Get the form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate the form data
if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required!";
    exit;
}

// Sanitize input data to prevent SQL injection
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$message = $conn->real_escape_string($message);

// Insert the contact data into the database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, now send the email

    // Email configuration
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from $name.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message: $message";

    $headers = "From: no-reply@yourdomain.com"; // Your domain email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the email!";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
