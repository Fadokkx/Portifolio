<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "ApolisDev@gmail.com";
  $subject = $_POST["subject"];
  $name = $_POST["name"];
  $from = $_POST["email"];
  $message = $_POST["message"];

  $headers = "From: $name <$from>" . "\r\n";

  mail($to, $subject, $message, $headers);
}
?>