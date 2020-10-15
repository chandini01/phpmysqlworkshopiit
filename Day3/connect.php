<?php
 error_reporting(0);
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'dbmarks';
$conn = mysqli_connect($host, $db, $password, $username) or die (mysqli_connect_error());
mysqli_select_db($conn , 'dbmarks') or die (mysqli_error($conn));
echo "Connected Successfully !";

?>