<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendMail($to, $subject, $html)
{
  $mail = new PHPMailer(true);
  $result = false;

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'burnoutpechvoorjou@gmail.com';
    $mail->Password = 'apma uycu ijfy mlmt';
    $mail->SMTPSecure = 'tsl';
    $mail->Port = 587;

    $mail->setFrom('burnoutpechvoorjou@gmail.com', 'Burnout Pech voor Jou');

    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $html;

    $mail->send();
    $result = true;
  } catch (Exception $e) {
    error_log('Send mail error: ' . $e->getMessage());
    echo 'Error' . $e->getMessage();
  }


  return $result;
}

$to = $_POST['to'];
$html = $_POST['html'];

if (sendMail($to, 'Burnout Uitslag - Burnout Pech Voor Jou', $html)) {
  echo 'Send mail success!';
} else {
  echo 'Send mail failed!';
}
