<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Customize the following lines to set the recipient's email address, subject, and email body
  $to = "shahriernobel4@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Send the email
  $success = mail($to, $subject, $body);

  // Return a response indicating the success or failure
  if ($success) {
    http_response_code(200);
    echo "Email sent successfully";
  } else {
    http_response_code(500);
    echo "Failed to send email";
  }
} else {
  http_response_code(400);
  echo "Bad request";
}
?>
