<?php
	class concho{

		public static $static_variable = 4;
		public $variable;
	}

	$a = new concho();
	$a->variable= 5;
	echo $a->variable;

	$b = new concho();
	$b->variable = 6;
	echo "<br>";
	echo $a->variable;
	echo "<br>";
	echo $b->variable;
	echo "<br>";
	//Không cần khởi tạo đối tượng
	echo concho::$static_variable;
?>