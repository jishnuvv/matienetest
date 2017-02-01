<?php
include('../config/data.php'); 
session_start();
$name=$_SESSION['name'];
mysqli_query($com,"delete * from test_signup where vchr_name=$name");
?>