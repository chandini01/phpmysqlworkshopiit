<?php
include ('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>School Admin</title>
	<style type="text/css">
		table{
			border: 1px solid #000000;
			width: 90%;
		}
		th{
			font-family: times new roman;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td{
			font-family: arial, san-serif;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td:first-child{
			text-align: left;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}

	</style>
</head>
<body align="center">
<h1>Welcome <?php echo $_SESSION['username'];?></h1>
<button><a href="add.php">Add</a></button>
<button><a href="out.php">Logout</a></button>

<br><br>


<table align="center">
	<tr>
		
		<th>Name</th>
		<th>Roll No.</th>
		<th>PHP</th>
		<th>MySQL</th>
		<th>HTML</th>
		<th>Total</th>
		<th>Out Of</th>
		<th>Percentage</th>
		<th>Status</th>
		<th colspan="2">Operation</th>
		
	</tr>
	<?php
	
	$result="SELECT * FROM login";

	$query = mysqli_query($mysqli,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $res['Name'];?></td>
		<td><?php echo $res['Rollno'];?></td>
		<td><?php echo $res['PHP'];?></td>
		<td><?php echo $res['MySQL'];?></td>
		<td><?php echo $res['HTML'];?></td>
		<td><?php echo $res['total'];?></td>
		<td><?php echo $res['out of'];?></td>
		<td><?php echo $res['percent'];?></td>
		<td><?php echo $res['status'];?></td>
		<td><a href="update.php">Update</a></td>
		<td>Delete</td>

	</tr>
<?php
}
?>

</table>
</body>
</html>