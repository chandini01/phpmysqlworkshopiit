<html>
<form action = 'q6_2.php' method ='POST'>
<label for="sname">Name of the student:</label>
  <input type="text" id="sname" name="sname"><br>
  <h4>Marks of the student</h4>
  <label for="sub1">Subject 1:</label>
  <input type="number" id="sub" name="sub1"><br>
  <label for="sub2">Subject 2:</label>
  <input type="number" id="sub2" name="sub2"><br>
  <label for="sub3">Subject 3:</label>
  <input type="number" id="sub3" name="sub3"><br>
  <label for="sub4">Subject 4:</label>
  <input type="number" id="sub4" name="sub4"><br>
  <label for="sub5">Subject 5:</label>
  <input type="number" id="sub5" name="sub5"><br>
  <input type = 'submit' value ='SUBMIT'>
  <output name = 'TOTAL MARKS OBTAINED' for "sub1 , sub2, sub3, sub4, sub5"></output>
  <output name = "PERCENTAGE OBTAINED" for "sub1 , sub2, sub3, sub4, sub5"></output>
  </form>
</html>
<?php
 $sname = $_POST['sname'];
 $sub1= $_POST['sub1'];
 $sub2= $_POST['sub2'];
 $sub3= $_POST['sub3'];
 $sub4= $_POST['sub4'];
 $sub5= $_POST['sub5'];
 
  if ($sub1<0||$sub1>100||$sub2<0||$sub2>100||$sub3<0||$sub3>100||$sub4<0||$sub4>100||$sub5<0||$sub5>100)
 {
	 echo "Please give your required input <br>";
 }
 else
 {
	$sname =$_POST["sname"];
		echo "NAME OF THE STUDENT : $sname <br>";
	$total = $sub1+$sub2+$sub3+$sub4+$sub5;
		echo "TOTAL MARKS OBTAINED : $total <br>";
	$marks = 500;
		echo "TOTAL MARKS: $marks <br>";
	$per = (($sub1+$sub2+$sub3+$sub4+$sub5)/500)*100;
		echo "PERCENTAGE OBTAINED : $per %<br>"; 
 
 }
?>
 
