<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	<form action="index.php" method="POST" role="form" enctype="multipart/form-data" style="border: 1px solid red; width: 350px;">
		<legend>UPLOAD SẢN PHẨM</legend>
	
		<div class="form-group" style="width: 300px;">
			<input type="file" name="upload"/>
			<br>
			<label for="">Tên sản phẩm:</label>
			<input type="text" class="form-control" name="product_name">
			<br>
			<label for="">giá:</label>
			<input type="number" class="form-control" name="price">
			<br>
			<label for="">Số lượng:</label>
			<input type="number" class="form-control" name="quantity">
			<br>
			<label for="">Loại sản phẩm:</label>
			<input type="number" class="form-control" name="category_id">
			<br>
			Lưu ý: Chỉ có 2 loại sản phẩm: 1 nhập khẩu - 2 Xuất khẩu (nếu nhập trên hoặc dưới 2 số này thì sản phẩm sẽ không chèn lên được)
		</div>
	
		<button type="submit" name="submit">Upload</button>

		<?php  
			error_reporting(1);
			if (isset($_POST["submit"])){

				$file_part = $_FILES["upload"]["name"];

				move_uploaded_file($_FILES["upload"]["tmp_name"], "img/".$file_part);

				$mysqli = new mysqli("localhost","root","", "db2") or die ("khong the ket not");

				$name = $_POST["product_name"];
				$price = $_POST["price"];
				$quantity = $_POST["quantity"];
				$id = $_POST["category_id"];


				$sql = "INSERT INTO products(image, product_name, price, quantity, category_id) VALUES ('$file_part', '$name', '$price', '$quantity', '$id')";
				mysqli_set_charset($mysqli,"utf8");
				if ($mysqli->query($sql)) {
					echo "<img src = 'img/$file_part' width = '100px' height = '100px'/>".$name.$price.$quatity.$id."<br>";
					echo "<br> Upload sản phẩm thành công";
				}else {
					echo "Upload sản phẩm không thành công";
				}

				
			}
		?>


	</form>
	<center>

</body>
</html>
