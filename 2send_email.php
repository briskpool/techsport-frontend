<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST['g_recaptcha_response'])) {
  $secret = '6LfMHS8gAAAAAIHwkL8JivMNjYPx347WZpLE5oIV';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g_recaptcha_response']);
  $responseData = json_decode($verifyResponse);
  if ($responseData->success) {
    if ($_POST['form']=='contact') {



      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $msg = $_POST['msg'];




      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
      //   $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = "mail.techsport-global.com";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "hello@techsport-global.com";
      $mail->Password = "Manchester+techsport";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "null";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "hello@techsport-global.com";
      $mail->FromName = "Tech Sport Global";
      $mail->addAddress("muzammil.mykhan@gmail.com");
      // $mail->addAddress("hello@techsport-global.com");


      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mailContent = file_get_contents('templates/mail.php');
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{msg}}',  $msg, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
          http_response_code(201);
      }
    } else if ($_POST['form']=='register') {

      

      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];


      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
        // $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = "mail.techsport-global.com";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "hello@techsport-global.com";
      $mail->Password = "Manchester+techsport";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "hello@techsport-global.com";
      $mail->FromName = "Tech Sport Global";
      // $mail->addAddress("hello@techsport-global.com");
      $mail->addAddress("muzammil.mykhan@gmail.com");


      $mail->isHTML(true);

      $mail->Subject = "Registration Request";

      $mailContent = file_get_contents('templates/register_mail.php');
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{l_name}}',  $l_name, $mailContent);
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{phone}}',  $phone, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
          http_response_code(201);
      }
    }
  }
} else {
  echo 'captcha-error';
}


