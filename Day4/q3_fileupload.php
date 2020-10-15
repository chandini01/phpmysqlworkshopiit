<html>
<form action = 'q3_fileupload.php' method = 'POST' enctype = 'multipart/form-data'>
 <input type = 'file' name = 'myfile' id = 'myfile'><p>
 <input type = 'submit' value = 'Upload' name = 'Upload'>
 </form>
</html>
<?php
   if (isset($_POST['Upload']))
   {
    $upload_tmp_dir = "Uploads1/";
    $target_file = $upload_tmp_dir . basename($_FILES["myfile"]["name"]);
    echo "Uploaded your file successfully <br>";
   } 
   echo $_FILES ["myfile"]["name"];  
   echo "<br>";
   echo $_FILES ["myfile"]["type"];
   echo "<br>";
   echo $_FILES ["myfile"]["tmp_name"];
   echo "<br>";
   echo $_FILES["myfile"]["size"];
?>

 
 
