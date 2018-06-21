<?php
	/**
	* 
	*/
	class DongVat
	{
		var $mat = '';
		var $mui = '';
		var $mieng = '';
		var $chan = '';
		var $gioitinh = '';
		function an()
		{
			echo "Động vật đang ăn"."<br>";
		}
		function ngu()
		{
			# code...
		}
		function chay()
		{
			# code...
		}
		function lahet()
		{
			# code...
		}
	}
	/**
	* 
	*/
	class ConTrau extends DongVat
	{
		//Các thuộc tính khác kế thừa từ cha
		var $sung;
		//Các phương thức khác kế thùa từ cha
		function gioi_thieu()
		{
			$this->mat = "Đây là cái mặt!";
			$this->mui = "Đây là cái mũi!";
			parent::an();
		}
	}

	$contrau = new ConTrau(); //tạo 1 thể hiện của class 
	$contrau->chan = "Động vận guốc mộc!";
	$contrau->gioi_thieu();
	echo $contrau->mat;
	echo $contrau->chan;
?>