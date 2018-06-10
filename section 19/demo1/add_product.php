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
		$checkValidate = true;
		$target = "images/"; 
		$target = $target . basename( $_FILES['image']['name']);
		if(isset($_POST['add_product'])){
			// echo "da nhan submit de tao san pham";		
			$category_id = $_POST['category_id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			$image = $_FILE['image']['name'];
			$price = $_POST['price'];
			if(empty($name) || empty($category_id) || empty($description) || empty($price)){
				$errorName =  "Please input value!";
				$checkValidate = false;
			}
			if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) 
			{
				echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
			} 
			else
			{
				echo "Sorry, there was a problem uploading your file.";
			}
			if($checkValidate){
				$sql = "INSERT INTO products(category_id,name,description,image,price) VALUES('$category_id','$name','$description','$image','$price')";
				mysqli_query($conn,$sql);
				//chuyen trang bang php
				header("Location: list_category.php");
			}
		}
	?>
	<h1>Add new category</h1>
	<form action="" method="post">
		<p>Category_id:<input type="text" name="category_id"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p>Name:<input type="text" name="name"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p>Description:<input type="text" name="description"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p>Image:<input type="file" name="image" id="image"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p>Price:<input type="text" name="price"></p>
		<span class="error"><?php echo $errorName;?></span>
		<p><input type="submit" name="add_product" value="Add"></p>
	</form>
</body>
</html>
