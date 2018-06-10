<h1>Edit product</h1>
<?php 
	include 'connectdb.php';
	$id = $_GET['idEdit'];
	$errorName = '';
	$checkValidate = true;
	//lay du lieu ra de Edit theo ID
	$sql = "SELECT * FROM products WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	while($row = $result->fetch_assoc()) {
		$category_id = $row['category_id'];
		$name = $row['name'];
		$description = $row['description'];
		$price = $row['price'];
	}
	if(isset($_POST['edit_category'])){
		$category_id = $_POST['category_id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		if($category_id == '' || $name == '' || $description == ''|| $price == ''){
			$errorName =  "Please input category name!";
			$checkValidate = false;
		}
		if($checkValidate){
			$sql = "UPDATE products SET category_id = '$category_id', name = '$name', description = '$description', price = '$price' WHERE id = $id";
			mysqli_query($conn,$sql);
			//chuyen trang bang php
			header("Location: list_category.php");
		}
	}	
	//
?>
<form action="" method="post">
	<p>Category_id:<input type="text" name="category_id" value="<?php echo $category_id;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p>Name:<input type="text" name="name" value="<?php echo $name;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p>Description:<input type="text" name="description" value="<?php echo $description;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p>Price:<input type="text" name="price" value="<?php echo $price;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p><input type="submit" name="edit_category" value="Edit"></p>
</form>