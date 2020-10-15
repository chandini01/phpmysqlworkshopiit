<form action = "q1.php" method="POST">
  <h2>Marksheet</h2>
  Name of the Student : <input type = "text" name ="name"><br>
  <h5>Enter the marks (Out of 100)</h5>
  
  <input type = 'number ' name = 'sub1' placeholder="Subject 1"><br>
  <input type = 'number ' name = 'sub2' placeholder="Subject 2"><br>
  <input type = 'number ' name = 'sub3' placeholder="Subject 3"><br>
  <input type = 'number ' name = 'sub4' placeholder="Subject 4"><br>
  <input type = 'number ' name = 'sub5' placeholder="Subject 5"><br>
  <input type = 'submit' name = "Submit">
  <input type = 'reset' name = "Reset" value = "Reset"><br>
</form>

<?php

require ("connect.php");

$name = $_POST["name"];
$m1 = $_POST["sub1"];
$m2 = $_POST["sub2"];
$m3 = $_POST["sub3"];
$m4 = $_POST["sub4"];
$m5 = $_POST["sub5"];

$tot_obt = $m1+$m2+$m3+$m4+$m5;
$tot_marks = 500;
$percentage = ($tot_obt/$tot_marks)*100;

if($percent<100) {
 if ($name && $m1 && $m2 && $m3 && $m4 && $m5){
  echo "
  <label>Student Name : </label>$name<br>
  <label>Subject 1 : </label>$m1<br>
  <label>Subject 2 : </label>$m2<br>
  <label>Subject 3 : </label>$m3<br>
  <label>Subject 4 : </label>$m4<br>
  <label>Subject 5 : </label>$m5<br>
  <label>Total Marks Obtained :</label>$tot_obt<br>
  <label>Total Marks : </label>$tot_marks<br>
  <label>Percentage Obtained : </label>$percentage<br>
  ";

  $write = "INSERT INTO `result.visitors` (`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percent`) VALUES (NULL,'$name','$m1', '$m2', '$m3', '$m4', '$m5', '$tot_obt', '$tot_marks', '$percent')";
  if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
  }
}
else{
  echo "Please enter marks between 0 - 100<br>";
}

$file = file_get_contents("count.txt");
$visitors = $file;

$visitorsnew = $visitors+ 1;

$filenew = fopen("count.txt", "w");
fwrite($filenew, $visitorsnew);

echo "<br><br><br><br><br><br><br>";
echo "You had $visitorsnew visitors<br>";

$write = "INSERT INTO `visitors`(`visitors`) VALUES ('$visitorsnew')";
	if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }

$conn->close();
?>