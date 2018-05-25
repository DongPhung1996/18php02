<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercies Form Validation</title>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];
			$user = @fopen('file_name.txt', "a");
			$address_email = @fopen('file_email.txt', "a");
			$pass = @fopen('file_password.txt', "a");
			$phone_number = @fopen('file_phone.txt', "a");
			if (empty($name)){
				echo "Bạn chưa nhập liệu";
			}
			else
			{
				fwrite($user, $name);
				fwrite($address_email, $email);
				fwrite($pass, $password);
				fwrite($phone_number, $phone);
				echo "Đã ghi vào file INFO.txt";
			}
		}
	?>
	<form action="" method="POST">
		Nhập tên: <input type="text" name="name" id="name">
		<br>
		Nhập email: <input type="text" name="email" id="email">
		<br>
		Nhập password: <input type="password" name="password" id="password">
		<br>
		Nhập số điện thoại: <input type="text" name="phone" id="phone">
		<br>
		<input type="submit" name="add_post" value="submit">
	</form>
</body>
</html>