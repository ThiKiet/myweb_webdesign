<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","registration");
	$query = mysqli_query($con,"delete from user where id = '$id'") or die("Loi truy van");
	if($query) {
		header("location: qlusers.php");
	}
 ?>