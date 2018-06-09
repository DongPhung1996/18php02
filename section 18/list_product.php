<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>list_product</title>
</head>
<body>
	<?php
		$conn = mysqli_connect('localhost', 'root', '');
		if ($conn) {
			mysqli_select_db($conn, 'learn_sql');
			$list_product = mysqli_query($conn, "SELECT *FROM categories");
		}
		else{
			die("Không kết nối được database: ".mysqli_error());
		}
	?>
	<h1>Các loại sản phẩm</h1>
	<table border="1">
		<tr bgcolor="#CC3300" style="color: #ffffff; font-weight: bold;">
			<td>Name</td>
			<td>Model</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Categories_ID</td>
			<td>Update</td>
			<td>Action</td>
		</tr>
		<?php
			while ($row = mysqli_fetch_array($list_product)) {
				$chuoi = "<tr>";
				$chuoi .= "<td>".$row['name']."</td>";
				$chuoi .= "<td>".$row['model']."</td>";
				$chuoi .= "<td>".$row['price']."</td>";
				$chuoi .= "<td>".$row['quanlity']."</td>";
				$chuoi .= "<td>".$row['categories_id']."</td>";
				$chuoi .= "<td><a href='edit.php?ID=". $row['name'] . "'> Edit </a></td>";
				$chuoi .= "<td><a href='delete.php?ID=". $row['name'] . "'> Delete </a></td>";
				$chuoi .= "</tr>";
				echo $chuoi;
			}
		?>
	</table>
	<?php
		$conn = mysqli_connect('localhost', 'root', '');
		if ($conn) {
			mysqli_select_db($conn, 'learn_sql');
			$list_items = mysqli_query($conn, "SELECT *FROM products");
		}
		else{
			die("Không kết nối được database: ".mysqli_error());
		}
	?>
	<h1>Danh mục sản phẩm</h1>
	<table border="1">
		<tr bgcolor="#CC3300" style="color: #ffffff; font-weight: bold;">
			<td>Categories_ID</td>
			<td>List_items</td>
			<td>Update</td>
			<td>Action</td>
		</tr>
		<?php
			while ($row2 = mysqli_fetch_array($list_items)) {
				$chuoi = "<tr>";
				$chuoi .= "<td>".$row2['categories_id']."</td>";
				$chuoi .= "<td>".$row2['list_items']."</td>";
				$chuoi .= "<td><a href='edit.php?ID2=". $row2['categories_id'] . "'> Edit </a></td>";
				$chuoi .= "<td><a href='delete.php?ID2=". $row2['categories_id'] . "'> Delete </a></td>";
				$chuoi .= "</tr>";
				echo $chuoi;
			}
		?>
	</table>
</body>
</html>