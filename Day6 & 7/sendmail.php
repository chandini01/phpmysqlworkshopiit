<html>
 <head>
   <title>SEND MAIL</title>
 </head>
  <body>
    <form action ="sendmail.php" method = "POST">
    PARENT'S MAIL ID:<input type = 'email' name = 'email' placeholder = 'Your emailid'>
    <h3>ENTER YOUR MARKS</h3>
    PHP: <input type = 'number' name = 'php'>
    MySQL: <input type = 'number' name = 'mysql'>
    HTML: <input type = 'number' name = 'html'>
    <input type = 'submit' name = 'submit' value = 'submit'>
    </form>
</html>

<?php
 include ("connect.php");
 session_start();
 $success = "";
 $mail = $_SESSION['email'];
 $sname = $_SESSION['user'];
 $select = "SELECT FROM login where Rollno = password AND student.email = '$mail' ";
 $final = mysqli->query ($mysqli, $select);
if (isset($_POST['submit'])) 
{
    $parent_email = (isset($_POST['parent_email'])? $_POST['parent_email']:null);
    if ($mysqli_num_rows($final)>0)
    {   
        while ($row = mysqli_fetch_assoc($final))
        {
          $subject1 = $row["PHP"];
          $subject2 = $row["MySQL"];
          $subject3 = $row["HTML"];
          $tot = $row["total"];
          $per = $row["percent"];
        
          $to = $parent_email;
          $subject = $sname Marksheet;
          $headers = "From: chandini.chent@gmail.com";
          nl2br("New line will start from here \n IN THIS STRING \r\n on the browser window");
          $body = "HTML : $subject3 \n PHP : $subject2 \n MySQL : $subject1";
          mail($to, $subject, $body, $headers);
          echo "Mail sent successfully";
        }
        
    }
}
else echo "Please input all the parameters";

?>