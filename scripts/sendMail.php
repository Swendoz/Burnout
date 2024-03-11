<?php
// PHPMailer kütüphanesini dahil ediyoruz
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // PHPMailer kütüphanesinin yolunu güncelleyin

// Mail gönderme fonksiyonu
function sendMail($to, $subject, $html)
{
  $mail = new PHPMailer(true); // Hata gösterimi aktif
  $result = false; // Varsayılan olarak başarısız kabul edelim

  try {
    // SMTP ayarları
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'burnoutpechvoorjou@gmail.com'; // Gmail adresinizi buraya girin
    $mail->Password = 'apma uycu ijfy mlmt'; // Gmail şifrenizi buraya girin
    $mail->SMTPSecure = 'tsl';
    $mail->Port = 587;

    // Gönderici bilgisi
    $mail->setFrom('burnoutpechvoorjou@gmail.com', 'Burnout Pech voor Jou'); // Gönderici ismini ve adresini buraya girin

    // Alıcı bilgisi
    $mail->addAddress($to);

    // E-posta içeriği
    $mail->isHTML(true); // HTML içerik desteklensin mi?
    $mail->Subject = $subject;
    $mail->Body    = $html;
    // $mail->msgHTML($html);

    // Mail gönderme işlemi
    $mail->send();
    $result = true; // İşlem başarılıysa result değişkenini true yapalım
  } catch (Exception $e) {
    error_log('E-posta gönderme hatası: ' . $e->getMessage());
    echo 'E-posta gönderirken bir hata oluştu.' . $e->getMessage();
  }


  return $result; // Değişkeni döndür
}

$to = $_POST['to'];
$html = $_POST['html'];

if (sendMail($to, 'Burnout Uitslag - Burnout Pech Voor Jou', $html)) {
  echo 'E-posta başarıyla gönderildi.';
} else {
  echo 'E-posta gönderirken bir hata oluştu.';
}
