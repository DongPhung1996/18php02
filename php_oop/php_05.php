<?php
	class A{

		public $name = "";
		public function __construct($name){
			$this->name = $name;
		}

		public function __destruct(){
			echo "Chạy vào hàm destruct!";
		}

	}

	$a = new A("Đồng");
	echo $a->name;

	//ví dụ cách sử unjdg hàm destruct
	class database{

		function connect();

		function disconnect();

		public function __destruct(){
			$this->disconnect();
		}
	}
?>
