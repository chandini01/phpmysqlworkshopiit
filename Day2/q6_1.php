<html>
 <form action ='q6_1.php' method ='GET'>
  <input type ='number' name ='sidea'><br>
  <input type ='number' name ='sideb'><br>
  <input type ='number' name = 'sidec'><br>
  <input type ='submit' value = 'Click here'>
  </form>
  </html>
 <?php
  $a = $_GET['sidea'];
  $b= $_GET['sideb'];
  $c= $_GET['sidec'];
  if ($a==$b && $b==$c)
  {echo"It is equilateral triangle";}
  elseif($a==$b || $b==$c || $a==$c)
  {echo "It is an isosceles triangle";}
  elseif (($a*$a == $b*$b + $c*$c)||($b*$b== $a*$a+$c*$c)||($c*$c= $a*$a+$b*$b))
  {echo "It is a right angled triangle";}
  else
  {echo "It is a scalene triangle"; }
 ?>