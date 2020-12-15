<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$error = "";
$successMessage = "";


if (array_key_exists('name', $_POST)) {

  $name = $_POST['name'];
  $date = $_POST['date'];
  $internal_rotation = $_POST['internal_rotation'];
  $content = $_POST['content'];

  if (!$name) {
    $error .= 'Name is required.<br>';
  }
  if (!$date) {
    $error .= 'Date is required.<br>';
  }
  // if (!$internal_rotation) {
  //   $error .= 'Please select an Internal Rotation.<br>';
  // }
  // if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  //   $error .= "The email address is invalid. <br>";
  // }
  if ($error != "") {
    $error = '<div class="alert alert-danger" role+"alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
  } else {
    require '../vendor/autoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'development@rphdesigns.com';
    $mail->Password = 'goCubsgo2727!';
    $mail->setFrom('development@rphdesigns.com', 'RPH');
    // $mail->addAddress('coach@rhodesperformance.net', 'Rhodes Performance');
    $mail->addAddress('development@rphdesigns.com', 'Rhodes Performance');
    $mail->Subject = 'Flexibility Testing Form for ' . $name;

    $mail->msgHTML(false);
    $body = 'Name: ' . $name . "<br>" . 'Date: ' . $date . "<br>" . 'Internal Rotation: ' . $internal_rotation . "<br>" . 'Message: ' . $content;
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    if (!$name && !$email && !$$internal_rotation) {
      $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message did not send</strong></p></div>';
    } else {
      if (!$mail->send()) {
      } else {
        $successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent</p></div>';
      }
    }
  }
}

?>
