<?php 
	$u = $_POST['username'];
	$e = $_POST['email'];
	$p = md5($_POST['password']);
	$tdate= date("Y-m-d H:i:s");

	$con = mysqli_connect("localhost","root","","registration");
	$sql = "insert into user (username, email, password, trn_date) VALUES ('$u', '$e', '".md5($p)."', '$tdate')";	$query = mysqli_query($con,$sql);
	if ($query) {
			header("location: qlusers.php");
		}

	 ?>