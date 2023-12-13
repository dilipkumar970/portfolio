<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'bonagiridilipkuma970@gmail.com'; // Replace with your Gmail address
  $subject = 'New Contact Form Submission';
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
  } else {
    echo 'Oops! Something went wrong.';
  }
}
?>
