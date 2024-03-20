<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "mirnalini1999@gmail.com";
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>

