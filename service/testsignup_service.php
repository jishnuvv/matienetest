<?php
include('../config/data.php'); 
if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])  && !empty($_POST['gender']) && !empty($_POST['hobies']) && !empty($_POST['file']) &&!empty($_POST['country']))
{
	
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$hobies=$_POST['hobies'];
$profile=$_POST['file'];
$country=$_POST['country'];
//echo "connect";
//mysqli_query($con,"insert into test_signup values(null,'$name','$phone','$email','$gender','$hobies','$profile','$country')")or die('failed');
mysqli_query($com,"insert into test_signup values(null,'$name','$phone','$email','$gender','$hobies','$profile','$country')");
header('location:../veiw/profile.php');
}
else

	echo "NO DATAS";

 ?>



