<html>
  <h2>FEEDBACK FORM</h2>
  <form action = 'q2_sendmail.php' method = 'POST'>
 <h4>Name          :  <input type = 'text' name = 'name' placeholder = 'Your full name'><br><h4>
 <h4>Email id      :<input type = 'email' name = 'mailid' placeholder = "Your mail id.."><br><h4>
 <h4>Feedback      : <textarea name = 'Feedback' placeholder = 'Your feedback'></textarea><p><h4>
  <input type = 'submit' name = 'submit' value = 'Send Feedback'>
  </form>
 </html>

 <?php

 if (isset($_POST['submit']))
 {
  $name = isset($_POST['name']);
  $email = isset($_POST['mailid']);
  $f = isset($_POST['feedback']);
  $subject = "Feedback";
  $message = "THANKYOU FOR YOUR FEEDBACK";
  $admin_log = "NAME: $name <br> EMAIL: $email <br> MESSAGE : $message";
  $headers = 'From: chandini.chent@gmail.com' ;
  mail($email, $subject, $message);
  echo "Mail sent successfuly to the user";
  mail("$headers", "Feedback entries", "$admin_log");
 }
 else 
  die ("Check your email address again.");
 
 ?>





