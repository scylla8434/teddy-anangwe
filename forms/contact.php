<?php
  $receiving_email_address = 'teddyanagwe@gmail.com'; 

  // Check if the required PHP Email Form library exists
  if (file_exists($php_email_form = '../assets/vendor/php-email-form/validate.js')) {
      include($php_email_form);
  } else {
      die('Unable to load the "PHP Email Form" Library!');
  }

  // Create a new instance of the email form
  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  // Set email details
  $contact->to = $receiving_email_address;
  $contact->from_name = htmlspecialchars($_POST['name']);
  $contact->from_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $contact->subject = htmlspecialchars($_POST['subject']);

  // SMTP Configuration (Replace with real SMTP credentials)
  $contact->smtp = array(
      'host' => 'smtp.gmail.com',  // 
      'username' => 'teddyanangwe@gmail.com', // SMTP username
      'password' => '', // SMTP password
      'port' => '587', 
      'encryption' => 'tls' 
  );

  // Add message content
  $contact->add_message($_POST['name'], 'From');
  $contact->add_message($_POST['email'], 'Email');
  $contact->add_message($_POST['message'], 'Message', 10);

  // Send the email and return the response
  echo $contact->send();
?>
