<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercies-2</title>
</head>
<body>
	<?php
		if (isset($_POST)['submit']) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			if (empty($name)) {
				echo "Bạn chưa nhập liệu!"."<br>";
			}
			else
			{
				echo "Bạn đã nhập liệu!";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "18php02";
				//Create connetionn
				$conn = new mysqli($servername, $username, $password, $database);

				//Check connection
				if ($conn->connect_error) {
					die("connection failed: ". $conn->connect_error);
					//var_dump();
					//exit;
				}
				$sql = "SELECT name, email, phone FROM users WHERE left(phone, 3) = '098'";
				$sql1 = "SELECT name, email, phone FROM users WHERE name LIKE '%a%'";
				$sql2 = "SELECT name, email, phone FROM users WHERE email LIKE '%@gmail%'";
				$sql3 = "DELETE FROM users WHERE phone LIKE '098' AND name LIKE '%a%'";
				$sql4 = "SELECT name, email, phone FROM users WHERE phone LIKE '_8%'";
				if ($conn->query($sql)===TRUE) {
					echo "Successfully";
				}
				else{
					echo "Error";
				}
				$conn->close();
			}
		}
	?>
	<h1>Form nhập liệu</h1>
	<form action="" method="POST">
		Nhập tên: <input type="text" name="name" id="name">
		Nhập email: <input type="text" name="email" id="email">
		Nhập phone: <input type="text" name="phone" id="phone">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>