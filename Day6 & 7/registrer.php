<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<style>
		form{
			margin-top: 5%;
		}
		a{
			text-decoration: none;
			color: #000000;
		}
	</style>
</head>
<body align="center">
	<form  method="post">
		<h1>Student Registration</h1>
		<table align="center">

	<tr>	<th><label>Full Name:</label></th><td><input type="text" name="name"></td></tr>
	<tr>	<th><label>Division :</label></th><td><input type="text" name="div"></td></tr>
	<tr>	<th><label>Roll no.(eg.301) </label></th><td><input type="text" name="roll"></td></tr>
		
		</table><br><br>
		<input type="submit" name="submit" value="Submit">
		
	</form>

<?php
if (isset($_POST['submit']))
{
 include ('connect.php');
 $name=$_POST['name'];
 $div=$_POST['div'];
 $roll=$_POST['roll'];
 $result = "INSERT INTO login (Id,Name, Division, Rollno) VALUES ('','$name','$div','$roll')";
 if($mysqli->query($result))
 {
	echo "<br>Regsitration Successful..<button> <a href='log.php'>Back to Login page</a></button>";
 }	
 else
 {    
   echo "Error:.$sql. <br>".$mysqli->error;
   echo "<br>Registration failed..";
 }

}
?>
</body>
</html>