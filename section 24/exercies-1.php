<?php  
	//Khoi tao doi tuong human
	class Human{
		//thuoc tinh human
		var $name = "Dong";
		var $old = 12;
		var $dateOfBrith = 1995;
		var $phone = "01658777234";
		var $id = 19454342;

		//phuong thuc human
		function resgiter(){
			return $this->name;
		}

		function getInfo(){
			return $this->name . $this->old;
		}

		function eat(){
			echo 'Ăn cơm';
		}

		function do(){
			echo 'Làm mọi việc';
		}

		private function getID(){
			return $this->id;
		}

		function getID2(){
			return $this->getID();
		}
	}

	$human = new Human();

	echo $human->resgiter();
	echo '<br>';
	echo $human->getInfo();
	echo '<br>';
	$human->eat();
	echo '<br>';
	$human->do();
	echo '<br>';
	echo $human->getID2();
	echo '<br>';


	//Khoi tao doi tuong sinh vien
	class Student extends Human{
		function eat(){
			echo 'Sinh viên ăn mỳ tôm';
		}

		function learn(){
			echo 'Học bài!';
		}
	}

	$student = new Student();

	echo 'Lớp sinh viên';
	echo '<br>';
	echo $student->resgiter();
	echo '<br>';
	echo $student->getInfo();
	echo '<br>';
	$student->eat();
	echo '<br>';
	$student->do();
	echo '<br>';
	$student->learn();
	echo '<br>';
	echo $student->getID();

?>