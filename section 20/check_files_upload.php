<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chek_files_upload</title>
</head>
<body>
	<h1>Form Upload</h1>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="upload" value="upload">
	</form>
	<?php
		if (isset($_POST['upload'])) {
			$filename = $_FILES["image"]["name"];
			$file_basename = substr($filename, 0, strripos($filename, '.')); // mở rộng file
			$file_ext = substr($filename, strripos($filename, '.')); // lấy tên file
			$filesize = $_FILES["image"]["size"];
			$file_types = array('.gif','.jpg','.png');	

			if (in_array($file_ext,$file_types) && ($filesize <= 5242880))
			{	
				//Kiểm tra sự tồn tại của file
				if (file_exists("upload/".$_FILES['image']['name']))
				{
					// file already exists error
					echo "You have already uploaded this file.";
				}
				else
				{		
					move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" .$_FILES['image']['name']);
					var_dump($_FILES);
					echo "File uploaded successfully.";		
				}
			}
			elseif (empty($file_basename))
			{	
				// Kiểm tra file 
				echo "Please select a file to upload.";
			} 
			elseif ($filesize > 5242880)
			{	
				// Kiểm tra kích thước
				echo "The file you are trying to upload is too large.";
			}
			else
			{
				// Kiểm tra loại file
				echo "Only these file types are allowed for upload: " . implode(', ',$file_types);
				unlink($_FILES["image"]["tmp_name"]);
			}
		}
	?>
</body>
</html>