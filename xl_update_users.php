<?php 
	$id = $_POST['id'];
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	$u = $_POST['username'];
	$e = $_POST['email'];
	$p = md5($_POST['password']);
	// $tdate= date("Y-m-d H:i:s");
	$con = mysqli_connect("localhost","root","","registration");
	$query = mysqli_query($con,"update user set username = '$u', email = '$e', password = '$p' where id = '$id'") or die("Loi truy van");
	if($query) {
		header("location: qlusers.php");
	 }
	 echo $sql;
	 
 ?>	

