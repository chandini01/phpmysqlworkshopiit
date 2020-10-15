<form action = "q1_md5.php" method="POST">
  <h5>Enter a username</h5>
  Username : <input type = 'text' name ='username'><br>
  <h5>Enter a new password</h5>
  Password : <input type = 'password' name = 'password'><br>
  <input type = 'submit' value = 'Store data'>
</form>
<?php 
require ("connect.php");
$uname = $_POST["username"];
$pw = $_POST["password"];
$finalpw =$POST_["md5($pw)"];
if ($uname && $pw)
 {
    
    echo "
    <label>Username : </label>$$uname<br>
    <label>Password : </label>$finalpw<br>
    ";
    $write = "INSERT INTO 'user_id' ('Id', 'username', 'password') VALUES (NULL, '$uname', '$finalpw')";

    if ($conn->query($write) === TRUE) 
    {
        echo "New record created successfully";
    } else 
    {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
 }
 $conn->close();

?>
