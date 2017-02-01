<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include('../config/data.php');


	$result=mysqli_query($com,"select * from test_signup");
	echo "<table border=1>";
	echo "<tr><td>slNo</td><td>pic</td><td>Name</td><td>phone</td><td>email</td><td colspan='2'>action</td></tr>";
	if(mysqli_num_rows($result)>=1)
	{
		while($row=mysqli_fetch_row($result))
		{

			$slno=$row[0];
			$name=$row[1];
			$phone=$row[2];
			$email=$row[3];
			$pic=$row[6];
			
			echo "<tr><td>$slno</td><td>$pic</td><td>$name</td><td>$phone</td><td>$email</td><td><a href='update.php'>edit</a></td><td><a href='../service/delete.php'>delete</a></td></tr>";
		}
			
		
		}
		?>
</body>
</html>