<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercies-2</title>
</head>
<body>
	<h1>Trang quản lý sản phẩm</h1>
	<h2>Nhập sản phẩm</h2>
	<form action="" method="POST">
		Tên sản phẩm: <input type="text" name="name" id="name">
		Loại sản phẩm: <input type="text" name="category" id="category">
		Mã sản phẩm: <input type="text" name="model" id="model">
		Đơn giá: <input type="text" name="price" id="price">
		Số lượng: <input type="text" name="quantity" id="quantity">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<h2>Nhập danh mục sản phẩm</h2>
	<form action="" method="POST">
		Tên danh mục: <input type="text" name="name-2" id="name-2">
		Loại sản phẩm: <input type="text" name="category2" id="category2">
		<br>
		<input type="submit" name="submit-2" value="submit">
	</form>
	<br>
	<a href="list_product.php">Đên bảng sản phẩm</a>
	<?php
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$category = $_POST['category'];
			$model = $_POST['model'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			if (empty($name) || empty($category) || empty($model) || empty($price) || empty($quantity)) {
				echo "Bạn chưa nhập dữ liệu";
			}
			else{
				echo "Bạn đã nhập dữ liệu"."<br>";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "learn_sql";
				//Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				if ($conn->connect_error) {
					die("connection false: ".$conn->connect_error);
				}
				$sql = "INSERT INTO categories (name, model, price, quanlity, categories_id) VALUES ('$name', '$model', '$price', '$quantity', '$category')";
				$sql1 = "SELECT name, model, price, quanlity, categories_id FROM categories";
				$result = $conn->query($sql1);
				if ($conn->query($sql) === TRUE) {
					echo "Đã nhập dữ liệu!";
				}
				else
				{
					echo "Error";
				}
				
			}
		}
		if (isset($_POST['submit-2'])) {
			$name2 = $_POST['name-2'];
			$category2 = $_POST['category2'];
			if (empty($name2) || empty($category2)) {
				echo "Bạn chưa nhập dữ liệu";
			}
			else{
				echo "Bạn đã nhập dữ liệu"."<br>";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "learn_sql";
				//Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				if ($conn->connect_error) {
					die("connection false: ".$conn->connect_error);
				}
				$sql = "INSERT INTO products (categories_id, list_items) VALUES ('$category2', '$name2')";
				$sql1 = "SELECT list_items categories_id FROM products";
				$result = $conn->query($sql1);
				if ($conn->query($sql) === TRUE) {
					echo "Đã nhập dữ liệu!";
				}
				else
				{
					echo "Error";
				}		
			}
		}
	?>
</body>
</html>