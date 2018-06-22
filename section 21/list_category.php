
 <h1>List categories</h1>
 <p><a href="add_product.php">Add new product</a></p>
 <?php
	include 'connectdb.php';
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows > 0){
		$i = 1;
		while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			echo  $i.' - '. $row['category_id'].' - '. $row['name'].' - '. $row['description'].' - '.$row['image'].' - '.$row['price'];		
			echo " <a href='edit_product.php?idEdit=$id'>EDIT</a>";
			echo " | <a href='delete_product.php?idDel=$id'>DELETE</a>";
			echo "<br>";
			$i++;
		}
	}else{
		echo "No product";
	}
 ?>
