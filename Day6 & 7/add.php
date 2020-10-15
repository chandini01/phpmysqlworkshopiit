<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD STUDENT DETAILS</title>
	<style type="text/css">
		button a{
			text-decoration: none;
			color:#000000;
		}
	</style>
</head>
<body align="center">
	<form method="POST">
	<table align="center">
	<tr>	<th><label>Full Name:</label></th><td><input type="text" name="Name"></td></tr>
	<tr>	<th><label>Division :</label></th><td><input type="text" name="Division"></td></tr>
	<tr>	<th><label>Roll no. </label></th><td><input type="text" name="Rollno"></td></tr>
	<tr> 	<th><label>PHP</label></th><td><input type="number" name="Php"></td></tr>
	<tr> 	<th><label>MySQL</label></th><td><input type="number" name="MySQL"></td></tr>
	<tr> 	<th><label>HTML</label></th><td><input type="number" name="HTML"></td></tr>
	

	</table>
	<br><br>
	<input type="submit" name="add" value="Add">
	<button><a href="admin.php">Back</a></button>
</form>
<?php
if (isset($_POST['add'])) {
$name=$_POST['Name'];
$div=$_POST['div'];
$roll=$_POST['Rollno'];
$php=$_POST['PHP'];
$mysql=$_POST['MySQL'];
$html=$_POST['HTML'];
$sum=$php+$mysql+$html;
$out=300;
$per=($sum/$out)*100;

if($per>60){
	$status="DISTINCTION";
}
elseif($per<35){
	$status="FAIL";
}
else{
	$status= "PASS";
}
$result = mysqli_query($mysqli,"INSERT INTO login(Id, Name, Division, Rollno, PHP, MySQL, HTML, total, out of, percent, status) VALUES ('','$name','$div','$roll','$php','$mysql','$html','$sum',$out, $per)");
if($result){
	echo "<br>Details Added Successfully..";
}	
else{
	echo "<br>Add details Failed..";
}

}
?>
</body>
</html>