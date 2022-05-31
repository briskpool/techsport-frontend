<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail_host="mail.techsport-global.com";
$user_name="hello@techsport-global.com";
$mail_pass="tech.sport22";
$from_name="Tech Sport Global";
$from_email="hello@techsport-global.com";
$to_email="muzammil.mykhan@gmail.com";


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
      $mail->Host = $mail_host;
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = $user_name;
      $mail->Password = $mail_pass;
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = $from_email;
      $mail->FromName = $from_name;
      $mail->addAddress($to_email);
     


      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mailContent = file_get_contents('templates/contact_mail.php');
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
      $mail->Host = $mail_host;
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = $user_name;
      $mail->Password = $mail_pass;
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = $from_email;
      $mail->FromName = $from_name;
      $mail->addAddress($to_email);
      // $mail->addAddress("info@algosportsgroup.com");


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
        echo "fail";
      die;
          http_response_code(201);
      }
    }
  }
} else {
  echo 'captcha-error';
}


