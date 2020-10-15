<?php
$string = "WELCOME TO XAMPP";
echo $string;
echo "<br>" ;
echo strlen($string);
echo "<br>" ;
echo strrev($string);
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
$a = "Chandini/Eshika/Sakshi/Shreya";
$exparray = explode("/",$a);
echo "<br>";
echo $exparray[1];
echo "<br>";
echo substr_replace($string , "APACHE", 11,15);
?>