<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = true;
  $mail->isSMTP();
  $mail->Host = 'smtp.office365.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'juanlara17@hotmail.com';
  $mail->Password = 'Jesus890418.!';
  $mail->SMTPSecure = 'STARTTLS';
  $mail->Port = 587;

  //Recipients
  $mail->setFrom('juanlara17@hotmail.com', 'JuanFe');
  $mail->addAddress('juanlara17@hotmail.com', 'Juan Lara');

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Su mensaje fue enviado con exito';
} catch (Exception $e) {
  echo "El mensaje no se pudo enviar";
}




  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  /*$receiving_email_address = 'juanlara17@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];*/

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

 /* $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/
?>
