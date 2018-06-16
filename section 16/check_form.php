<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$user = @fopen('user.txt', "r");
			if (empty($name)) {
				echo "bạn chưa nhập liệu!";
			}	
			else
			{
				if (!$user) {
					echo "Mở file không thành công";
				}
				else
				{
					$found = false;
					while ($line = fgetcsv($user, null, ':')) != false {
						if (count($line) > 1) {
							if ($line[0]) {
								# code...
							}
						}
					}
				}
			}
		}
	?>
	<form action="" method="POST">
		Nhập tên: <input type="text" name="name" id="name">
		<br>
		Nhập email: <input type="text" name="email" id="email">
		<br>
		Nhập password: <input type="password" name="name">
		<br>
		Nhập số điện thoại: <input type="text" name="name">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>