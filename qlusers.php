<?php 
	require("db.php");
?>
<h1>Danh sách người dùng</h1>
<table border="1">
	<tr>
		<th>STT</th>
		<th>UserName</th>
		<th>Email</th>
		<th>Password</th>
		<th>Trn_date</th>
		<th>Action</th>

	</tr>
	<?php 
		$query = mysqli_query($con,"select * from user") ;
		$i = 1;
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "<td>".$row["trn_date"]."</td>";
			echo "<td><a href='add_users.php'>Thêm</a> | <a href='update_users.php?id=".$row['id']."'>Sửa</a> | <a href='delete_users.php?id=".$row['id']."'>Xóa</a> </td>";
			echo "</tr>";
			$i++;
		}

	?>
</table>
