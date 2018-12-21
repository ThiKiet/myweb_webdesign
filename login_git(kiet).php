<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <?php
 error_reporting(1);
	if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
		if ($_FILES['fileUpload']['error'] > 0)
			echo "Upload lỗi rồi!";
		else {
			move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
			echo "upload thành công <br/>";
			echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
			echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
			echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
		}
	}

	if (!empty($_POST["username"]) && !empty($_POST["Email"]) && !empty($_POST["Password"])&& !empty($_POST["ngaysinh"])) {
		$tendangnhap=$_POST["username"];
		$email=$_POST["Email"];
		$matkhau=$_POST["Password"];
		$ngaysinh=$_POST["ngaysinh"];

		//tạo session để lưu mảng
	 	$_SESSION["username"] = $_POST["username"];
		$_SESSION["Email"] = $_POST["Email"];
		$_SESSION["Password"] = $_POST["Password"];
		$_SESSION["ngaysinh"] = $_POST["ngaysinh"];
		
		//Xuất dữ liệu
		echo "Tên của bạn: <b>".$_SESSION["username"]."</b><br><br>"; 
		echo "Email: <b>".$_SESSION["Email"]."</b><br><br>"; 
		echo "User: <b>".$_SESSION["Password"]."</b><br><br>"; 
		echo "Password: <b>".$_SESSION["ngaysinh"]."</b><br><br>";
							
	}
	else{
		echo "Enter all information, Please";
	}

	?>	

	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title" style="text-align: center;">FORM</h3>
			</div>
			<div class="panel-body">
				<form action="login_git.php" method="POST" class="form-horizontal" role="form" style="padding: 20px;">
					<input type="file" name="fileUpload" value="">
					<input type="submit" name="up" value="Upload">
					<div class="row">
						<label>User Name: </label>
						<input type="text" name="username" value=" <?php echo($_POST["username"]) ?>">
					</div>
					<div class="row">
						<label>Email: </label>
						<input type="Email" name="Email" value="<?php echo($_POST["Email"]) ?>">

					</div>
					<div class="row">
						<label>Password: </label>
						<input type="Password" name="Password" value="<?php echo($_POST["Password"]) ?>">

					</div>
					<div class="row">
						<label>Ngày sinh: </label>
						<input type="date" name="ngaysinh" value="<?php echo($_POST["ngaysinh"]) ?>">

					</div>


					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">OK</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
	
    
</body>
</html>