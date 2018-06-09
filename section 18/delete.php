<?php
	if (isset($_REQUEST["ID"])) {
		$conn = mysqli_connect('localhost', 'root', '');
		if ($conn) {
			mysqli_select_db($conn, 'learn_sql');
			$query = "DELETE FROM categories WHERE name='".$_REQUEST["ID"]."'";
			$result = mysqli_query($conn, $query);
			if ($result) {
				header("location:list_product.php");
			}
		}
		else{
			die("Không kết nối được database: ".mysqli_error());
		}
	}
	else
	{
		header("location:list_product.php");
	}

	if (isset($_REQUEST["ID2"])) {
		$conn = mysqli_connect('localhost', 'root', '');
		if ($conn) {
			mysqli_select_db($conn, 'learn_sql');
			$query2 = "DELETE FROM products WHERE categories_id='".$_REQUEST["ID2"]."'";
			$result2 = mysqli_query($conn, $query2);
			if ($result2) {
				header("location:list_product.php");
			}
		}
		else{
			die("Không kết nối được database: ".mysqli_error());
		}
	}
	else
	{
		header("location:list_product.php");
	}
?>