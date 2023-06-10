<?php

  $receiving_email_address = 'contacts@uici.info';

  if( !file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) :
   die( 'Unable to load the "PHP Email Form" Library!');
  endif;
  include( $php_email_form );

  extract($_POST);
  $contact = new $php_email_form;
  $contact->ajax = true;
  $contact->to = $receiving_email_address;
  $contact->from_name = $name;
  $contact->from_email = $email;
  $contact->subject = $subject;

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
  $contact->add_message( $name, 'From');
  $contact->add_message( $email, 'Email');
  $contact->add_message( $message, 'Message', 10);

  echo $contact->send();
?>
