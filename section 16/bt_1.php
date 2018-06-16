<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercisse-1</title>
</head>
<body>
	<?php
		$name = "Phung Thanh Dong";
		str_replace(' ', '',$name);
		echo strlen($name);
		echo "<br>";
		str_replace('', ' ',$name);
		echo str_word_count($name);
		echo "<br>";
		echo strtoupper($name);
		echo "<br>";
		echo str_replace('Dong', 'PHP', $name);
		echo "<br>";
		echo "n:".strpos($name, "n")."<br>";
		$name1 = explode(' ', $name);
		var_dump($name1);
		echo "<br>";
		foreach ($name1 as $key => $value) {
			echo "Key: $key. Value: $value<br>";
			echo "n:".strpos($value, "n")."<br>";
		}
		echo substr_count($name,  "n");
		$ki_tu_can_tim = "n";
		$count = "0";
		for ($i=0; $i < strlen($name); $i++) { 
			if(strpos($name, $ki_tu_can_tim) == $ki_tu_can_tim)
			{
				echo "true";
			}
		}
	?>
</body>
</html>