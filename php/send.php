<?php 
  $errors = '';
  $myemail = 'hlmurray91@gmail.com';//<-----Put Your email address here.
  if(empty($_POST['firstname'])  || 
     empty($_POST['lastname']) || 
     empty($_POST['email']))
  {
      $errors .= "\n Please fill out all fields.";
  }

  $firstname = $_POST['firstname']; 
  $lastname = $_POST['lastname']; 
  $email_address = $_POST['email']; 

  if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
  $email_address))
  {
      $errors .= "\n Please enter a valid email address.";
  }

  if( empty($errors))
  {
    $to = $email_address; 
    $email_subject = "your Percolate demo!";
    $email_body = "Hey $firstname, thanks for requesting a demo!"; 
    
    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";
    
    mail($to,$email_subject,$email_body,$headers);
    echo "Thanks, check your email for your demo!<br>";
  } 
?>