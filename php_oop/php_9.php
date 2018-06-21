<?php
	class database{
		public static $connect = null;

		public function __construct(){
			$this->connect();
		}

		public function connect(){
			//self de goi bien static trong class
			if(seft::$connect === NULL){
				self::$connect mysql_connect();
			}
			return self::$connect;
		}

		public static function method1(){
			self::$connect;
		}
	}

	$a = new database; //Khoi tao 1 connect den mysql
	$b = new database(); //Khoi tao 1 connect den mysql

	//bao can tao 1 bien static luu tru ket noi

	//kiem tra bien static duoc load hay chua 
	// Chua load thi load ket noi vao

?>