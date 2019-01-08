<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","registration");
	$query = mysqli_query($con,"select * from user where id = '$id'") or die("Loi truy van");
	$rows = mysqli_fetch_array($query);
	print_r($rows);
?>
<h1>Update Users</h1>
<form action="xl_update_users.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
 	UserName: <input type="text" name="username" value="<?php echo $rows['username'];?>"><br>
	Email: <input type="text" name="email" value="<?php echo $rows['email'];?>"><br>
	Password: <input type="password" name="password" value="<?php echo $rows['password'];?>"><br>
	<input type="submit" value="Update Users">
</form>