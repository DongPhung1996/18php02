<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>exercies 3 and 3.1</title>
	</head>
	<body>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$detail = $_POST['detail'];
				$text = @fopen('text1.txt', "w+");
				if(empty($detail))
				{
					echo "Bạn chưa nhập gì cả!";
				}	
				else
				{
					fwrite($text, $detail);
					$text = @fopen('text1.txt', "r");
					$file1 = @fopen('demo.txt', "w");
					$file2 = @fopen('demo1.txt', "w");
					if (!$text) {
							echo "Mo file khong thanh cong!";
						}
					else
					{
						$text1 = fread($text, filesize('text1.txt'));
						echo $text1."<br>";
						print count(array_filter(str_split($text1),'is_numeric'))." ký tự số"."<br>";
						preg_match_all("/[A-Z]/", $text1, $caps_match);
						$caps_count = count($caps_match[0]);
						print "$caps_count ký tự in hoa <br>";
						$iparr = explode(".", $text1);
						print "$iparr[0] <br>";
						fwrite($file1, $iparr[0]);
						print "$iparr[1] <br>";
						fwrite($file2, $iparr[1]);
					}
				}
			}
		?>
		<form action="" method="POST">
			<label for="detail" id="detail">Chi tiết</label><br>
			<textarea name="detail" id="detail" cols="50" rows="8"></textarea><br>
			<input type="submit" name="add_post" value="submit">
		</form>
	</body>
</html>

