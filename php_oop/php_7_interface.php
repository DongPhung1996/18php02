<?php
	interface dongvat{
		function run();
		function eat();
		function sleep();
	}

	class concho implements dongvat{
		
		public function run(){

		} 
		public function eat(){

		}
		public function sleep(){

		}
	}
?>

//abstrack 
- giống như một bản thiết kế class cha cho các class con.
- Mô tả thêm các thuộc tính, phương thưc hoạt động

//interface 
- Đơn thuần chỉ là một bản thiết kế về cách thức hoạt động của lớp cha.
