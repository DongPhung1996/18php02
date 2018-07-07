<?php 
	class User{
		//thuộc tính của đối tượng
		var $name;
		//Phuong thức của đối tượng
		function getName(){
			echo 'My name is DOng';
		}
	}
	$user = new User();

	$user->getName();
?>