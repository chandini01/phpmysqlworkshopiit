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

$name = $_POST["Student_name"];
$m1 = $_POST["Subject1"];
$m2 = $_POST["Subject_2"];
$m3 = $_POST["Subject_3"];
$m4 = $_POST["Subject_4"];
$m5 = $_POST["Subject_5"];

$Total_obtained = $Subject1+$Subject_2+$Subject_3+$Subject_4+$Subject_5;
$Total_marks = 500;
$Percentage = ($Total_obtained/$Total_marks)*100;

if($Percentage<100) {
 if ($Student_name && $Subjec1 && $Subject_2 && $Subject_3 && $Subject_4 && $Subject_5){
  echo "
  <label>Student Name : </label>$Student_name<br>
  <label>Subject 1 : </label>$Subjec1<br>
  <label>Subject 2 : </label>$Subject_2<br>
  <label>Subject 3 : </label>$Subject_3<br>
  <label>Subject 4 : </label>$Subject_4<br>
  <label>Subject 5 : </label>$Subject_5<br>
  <label>Total Marks Obtained :</label>$Total_obtained<br>
  <label>Total Marks : </label>$Total_marks<br>
  <label>Percentage Obtained : </label>$Percentage%<br>
  ";

  $write = "INSERT INTO `class1` (`Student_id`, `Student_name`, `Subject1`, `Subject_2`, `Subject_3`, `Subject_4`, `Subject_5`, `Total_obtained`, `Total_marks`, `Percentage`) VALUES (NULL,'$name','$Subject1', '$Subject_2', '$Subject_3', '$Subject_4', '$Subject_5', '$Total_obtained', '$Total_marks', '$Percentage')";
  if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
  }
}
else{
  echo "Please enter marks between 0 - 100";
}
$extract= (" SELECT * FROM `studentmarks` WHERE name='Rohan' ");
$getdata = mysqli_query($conn , $extract);

while($row = mysqli_fetch_assoc($getdata)){ 
  $name=$row['Student_name'];
  $m5=$row['Subject_5'];
  $total_obt=$row['Total_obtained'] ;
  $percent=$row['Percentage'];

  @$new_m5=99;
  @$new_total_obt=$total_obt-$m5+$new_m5 ;
  @$new_percent=  $new_total_obt/5;
  echo  "Marksheet before updating :<br> Subject 5 = ".$m5."<br>Total Marks obtained : ".$total_obt."<br>Percentage Obtained : ".$percent." %<br>";

  $update="UPDATE `studentmarks` SET `sub5`=$new_m5, `total obtained`=$new_total_obt, `percent`=$new_percent WHERE name='Rohan'";
    if (mysqli_query($conn, $update))
    {
      echo "<br>Update done sucessfully<br><br>";
    }
    else
    {
      echo "error updating record :" .mysqli_error($connect);
    }
 }
 echo  @$name." has updated marksheet:<br> Subject 5 = ".@$new_m5."<br>Total Marks obtained : ".@$new_total_obt."<br>Percentage Obtained : ".@$new_percent." %" ;

 mysqli_close($conn);
$conn->close();
?>