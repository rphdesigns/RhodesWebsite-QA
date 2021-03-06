<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$error = "";
$successMessage = "";


if (array_key_exists('name', $_POST)) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['genderRadioOptions'];
  $fitness = $_POST['fitnessRadioOptions'];
  $workout = $_POST['workout_equipmentRadioOptions'];
  $workouts_perweek = $_POST['workouts_perweek'];

  if (!$name) {
    $error .= 'Name is required.<br>';
  }
  if (!$gender) {
    $error .= 'Gender cannot be empty<br>';
  }
  if (!$fitness) {
    $error .= 'Please select a Fitness Goal<br>';
  }
  if (!$workout) {
    $error .= 'Please select your Workout Equipment<br>';
  }
  if (!$workouts_perweek) {
    $error .= 'Please select a number of Workouts Per Week<br>';
  }
  if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $error .= "The email address is invalid. <br>";
  }
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
    $mail->Password = '';
    $mail->setFrom('development@rphdesigns.com', 'RPH');
    $mail->addAddress('coach@rhodesperformance.net', 'Rhodes Performance');
    $mail->addAddress('development@rphdesigns.com', 'Rhodes Performance');
    $mail->Subject = 'Flexibility Testing Form for ' . $name;

    $mail->msgHTML(false);
    $body = "<html>

    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
            integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
        <link href='https://fonts.googleapis.com/css2?family=Russo+One&display=swap' rel='stylesheet'>
    </head>
    
    <body style='font-family: 'Russo One', sans-serif;'>
        <div class='container'>
            <div class='row'>
                <img src='http://rhodesperformance.net/Logos/R-logo-backdrop.jpg' style='width: 350;height: 150; padding-bottom: 5mm;'>
            </div>
            <div class='row'>
                <h4>Your email has been sent!</h4>
            </div>
            <div class='row'>
                <h6>We will get back to you shortly!</h6> 
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Name: $name</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Email: $email</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Gender: $gender</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Fitness Goal: $fitness</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Workout Equipment: $workout</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Workout Per Week: $workouts_perweek</p>
                </div>
            </div>
        </div>
    </body>
    </html>";
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
