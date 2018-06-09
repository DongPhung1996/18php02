<?php
	if (isset($_REQUEST["ID"])) {
		$conn = mysqli_connect('localhost', 'root', '');
		if ($conn) {
			mysqli_select_db($conn, "learn_sql");
			if (isset($_REQUEST["flag"])) {
				$query ="UPDATE categories SET 
				name ='".$_POST["name"]."',
				model ='".$_POST["model"]."',
				price ='".$_POST["price"]."',
				quanlity ='".$_POST["quantity"]."',
				categories_id ='".$_POST["categories_id"]."'
				WHERE name ='".$_REQUEST["ID"] . "'";
				$result = mysqli_query($conn, $query);
				if ($result) {
					header("location:list_producct.php");
					exit();
				}
			}
			else
			{
				if(isset($_REQUEST['ID']))
				{
					$query = "SELECT * FROM categories WHERE name = '".$_REQUEST['ID']. "'";
					$rowList = mysqli_query($conn, $query);
					while ($row = mysqli_fetch_array($rowList)) {
						$name = $row["name"];
						$model = $row["model"];
						$price = $row["price"];
						$quantity = $row["quanlity"];
						$categories_id = $row["categories_id"];
					}
				}
			}
		}
		else
		{
			die("Connect fail: ".mysqli_error());
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit product</title>
</head>
<body>
	<form name="form-1" method="post"  action="list_producct.php?flag=1&ID=<?=$_REQUEST['ID']?>">
		Tên sản phẩm: <input type="text" name="name" id="name" readonly="true" value="<?= $_REQUEST['ID'] ?>" /> <hr>
		Loại sản phẩm: <input type="text" name="category" value="<?= $categories_id?>"><hr>
		Mã sản phẩm: <input type="text" name="model" value="<?= $model?>"><hr>
		Đơn giá: <input type="text" name="price" value="<?= $price?>"><hr>
		Số lượng: <input type="text" name="quantity" value="<?= $quantity?>">
		<hr>
		<input type="submit" name="submit" value="update">
	</form>
</body>
</html>