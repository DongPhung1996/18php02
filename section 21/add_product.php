<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">.error {color:red;}</style>
</head>
<body>
	<?php
		include 'connectdb.php';
		$errorName = '';
		$errorId = '';
		$errorDes = '';
		$errorPrice = '';
		$errorImg = '';
		$checkId = true;
		$checkName = true;
		$checkDescription = true;
		$checkPrice = true;
		$image = 'default.png';
		$pu
		if(isset($_POST['add_product'])){
			$target = 'images/';
			// echo "da nhan submit de tao san pham";		
			$category_id = $_POST['category_id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			//var_dump($_FILES);
			//exit();
			$image = $_FILES['image']['name'];
			$price = $_POST['price'];
			if(empty($category_id)){
				$errorId =  "Please input category_id!";
				$checkId = false;
			} 
			if(empty($name)){
				$errorName =  "Please input name!";
				$checkName = false;
			} 
			if(empty($description)){
				$errorDes =  "Please input description!";
				$checkDescription = false;
			} 
			if(empty($price)){
				$errorPrice =  "Please input price!";
				$checkPrice = false;
			}
			if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) 
			{
				echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
			} 
			else
			{
				echo "Sorry, there was a problem uploading your file.";
				$errorImg = "Please inp image!";
			}
			if($checkId && $checkName && $checkDescription && $checkPrice){
				$sql = "INSERT INTO products(category_id,name,description,image,price) VALUES('$category_id','$name','$description','$image','$price')";
				mysqli_query($conn,$sql);
				//chuyen trang bang php
				header("Location: list_category.php");
			}
		}
	?>
	<h1>Add new product</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<p>Category_id:<input type="text" name="category_id"></p>
		<span class="error"><?php echo $errorId;?></span>
		<p>Name:<input type="text" name="name"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p>
			Category:
			<select name="category_id">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
		</p>
		<p>Description:<input type="text" name="description"></p>
		<span class="error"><?php echo $errorDes;?></span>
		<p>Image:<input type="file" name="image" ></p>
		<span class="error"><?php echo $errorImg;?></span>
		<p>Price:<input type="text" name="price"></p>
		<span class="error"><?php echo $errorPrice;?></span>
		<p>Publi</p>
		<p><input type="submit" name="add_product" value="Add"></p>
	</form>
</body>
</html>
