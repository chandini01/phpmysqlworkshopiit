<?php
    error_reporting(0);
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "dbmarks";
    
    $mysqli =new mysqli("$servername","$dbusername", "$dbpassword", "$db") or die ("Connection failed!");
    echo "Connected successfully";
    
 ?>