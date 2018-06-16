<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload_file</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="upload" value="upload">
	</form>
	<?php
		//xử lý upload
		if (isset($_POST['upload'])) 
		{
			if (isset($_FILES['image'])) {
				if ($_FILES['image']['error'] > 0) {
					echo "File Upload Error";
				}
				else{
					move_uploaded_file($_FILES['image']['tmp_name'], '/images'.$_FILES['image']['name']);
					echo "File Upload";
				}
			}
			else{
				echo "You don't choose file upload!";
			}
		}
	?>
</body>
</html>