<h1>Edit product</h1>
<?php 
	include 'connectdb.php';
	$id = $_GET['idEdit'];
	$errorName = '';
	$errorId = '';
	$errorDes = '';
	$errorPrice = '';
	$errorImg = '';
	$checkId = true;
	$checkName = true;
	$checkDescription = true;
	$checkPrice = true;
	$checkImg = true;
	//lay du lieu ra de Edit theo ID
	$sql = "SELECT * FROM products WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	while($row = $result->fetch_assoc()) {
		$category_id = $row['category_id'];
		$name = $row['name'];
		$description = $row['description'];
		$price = $row['price'];
	}
	if(isset($_POST['edit_product'])){
		$category_id = $_POST['category_id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$image = $_FILES['image']['name'];
		if($category_id == '') {
			$errorId =  "Please input category_id!";
			$checkId = false;
		}
		if ($name == '') {
			$errorName =  "Please input name!";
			$checkName = false;
		}
		if ($description == ''){
			$errorDes =  "Please input description!";
			$checkDescription = false;
		}
		if ($price == ''){
			$errorPrice =  "Please input price!";
			$checkPrice = false;
		}
		if ($image == '') {
			if($checkId && $checkName && $checkDescription && $checkPrice && $checkImg == true){
				$sql = "UPDATE products SET category_id = '$category_id', name = '$name', description = '$description', price = '$price' WHERE id = $id";
				mysqli_query($conn,$sql);
				//chuyen trang bang php
				header("Location: list_category.php");
			}
		}
		else{
			if($checkId && $checkName && $checkDescription && $checkPrice && $checkImg == true){
				if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) 
				{
					echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 

				} 
				$sql = "UPDATE products SET category_id = '$category_id', name = '$name', description = '$description', image = '$image', price = '$price' WHERE id = $id";
				mysqli_query($conn,$sql);
				//chuyen trang bang php
				header("Location: list_category.php");

			}
		}
		
	}	
?>
<form action="" method="post" enctype="multipart/form-data">
	<p>Category_id:<input type="text" name="category_id" value="<?php echo $category_id;?>"></p>
	<span class="error"><?php echo $errorId;?></span>
	<p>Name:<input type="text" name="name" value="<?php echo $name;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p>Description:<input type="text" name="description" value="<?php echo $description;?>"></p>
	<span class="error"><?php echo $errorDes;?></span>
	<p>Image:<input type="file" name="image" value="<?php echo $image;?>"></p>
	<span class="error"><?php echo $errorImg;?></span>
	<p>Price:<input type="text" name="price" value="<?php echo $price;?>"></p>
	<span class="error"><?php echo $errorPrice;?></span>
	<p><input type="submit" name="edit_product" value="Edit"></p>
</form>