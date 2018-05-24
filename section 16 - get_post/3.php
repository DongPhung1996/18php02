<?php
	$text = @fopen("text1.txt", "r+");
	$file1 = @fopen("demo.txt", "w");
	$file2 = @fopen("demo1.txt", "w");
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
	
?>