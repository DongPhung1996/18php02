<?php 
 	/**
 	* Khai báo đối tượng động vật
 	*/
 	class DongVat
 	{
 		//Các thuộc tính
 		var $mat;
 		var $mui;
 		var $tay;
 		var $chan;
 		var $hello = "Xinh chào các bạn, Tôi đang ăn nhé!";

 		//Các phương thức

 		function an($thuc_an)
 		{
 			echo "Hôm nay ăn món: " . $thuc_an. "<br>";
 		}


 		function chao()
 		{
 			echo $this->hello."<br>";
 		}

 		function chay()
 		{

 		}

 	}

 	// Khỏi tạo lớp động vật mới

 	$conheo = new DongVat();

 	//Gán giá trị cho các thuộc tính
 	$conheo->an('Cám');
 	$conheo->chao();
 	$conheo->mat = "Mắt 2 mí";
 	$conheo->mui = "Mũi tây phương";
 	
 	//Lấy các giá trị và xuất ra màn hình
 	echo $conheo->mat."<br>";
 	echo $conheo->mui;
?>
