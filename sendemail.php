<?php
    $companyname = @trim(stripslashes($_POST['companyname'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 
    $email_from = $email;
    $email_to = 'qbm.biz@gmail.com';//replace with your email
    $body = 'Company Name: ' . $companyname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
    $retval = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

         if( $retval == true ) {
           ?>
       <script>
     alert('successfully sent message');
window.location = "contact.html";
       </script>
       <?php
         }else {
             ?>
       <script>
         alert('something went wrong');
window.location = "contact.html";
       </script>
       
       <?php
         }
  
      ?>