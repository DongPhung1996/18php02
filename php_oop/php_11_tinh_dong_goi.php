<?php
	// Lớp Hình Học
	class HinhHoc
	{
	    // Hàm Vẽ Hình
	    function Ve()
	    {
	        // Code
	    }
	  	//Hàm tính chu vi của hình
	    function tinh_Chu_Vi()
	    {
	    	
	    }
	    // Hàm Tính Diện Tích Của Hình
	    function tinh_Dien_Tich()
	    {
	        // Code
	    }

	}
	  
	// Lớp hình Vuông
	class HinhVuong extends HinhHoc
	{
	    // Độ Dài Cạnh
	    public $canh = 0;
	  
	    // Định Nghĩa Lại Hàm Vẽ Hình Vuông
	    function Ve()
	    {
	        echo 'Vẽ Hình Vuông'.'<br/>';
	        echo '****'.'<br/>';
	        echo '****'.'<br/>';
	        echo '****'.'<br/>';
	        echo '****'.'<br/>';
	    }
	    // Định nghĩa lại hàm tính chu vi hình vuông
	  	function tinh_Chu_Vi()
	    {
	    	return $this->canh*4;
	    }
	    //  Định Nghĩa Lại Hàm Tính Diện Tích
	    function tinh_Dien_Tich()
	    {
	        return $this->canh*$this->canh;
	    }
	}
	  
	// Lớp hình chữ nhật
	class HinhChuNhat extends HinhHoc
	{
	    // Chiều Dài Và Chiều Rộng
	    public $dai = 0;
	    public $rong = 0;
	  
	    // Định Nghĩa Lại Hàm Vẽ Hình Chữ Nhật
	    public function Ve()
	    {
	        echo 'Vẽ Hình Chữ Nhật'.'<br/>';
	        echo '***********'.'<br/>';
	        echo '***********'.'<br/>';
	        echo '***********'.'<br/>';
	        echo '***********'.'<br/>';
	    }

	   	// Định nghĩa lại tính chu vi hình chữ nhật
	    function tinh_Chu_Vi()
	    {
	    	return ($this->dai + $this->rong) * 2;
	    }
	  
	    // Định Nghĩa Lại Hàm Tính Diện Tích
	    public function tinh_Dien_Tich()
	    {
	        return $this->dai * $this->rong;
	    }
	}
	  
	// ------------------ //
	// Chương Trình Chính //
	// ------------------ //
	  
	// Hình Chữ Nhật
	$HinhChuNhat = new HinhChuNhat();
	$HinhChuNhat->Ve();
	echo '<br/>';
	 
	$HinhChuNhat->dai = 25;
	$HinhChuNhat->rong = 20;
	echo 'Chu vi hình chữ nhật là: '.'<br/>';
	echo $HinhChuNhat->tinh_Chu_Vi();
	echo '<br/>';
	echo 'Diện tích hình chữ nhật là: '.'<br/>';
	echo $HinhChuNhat->tinh_Dien_Tich();
	echo '<br/>';
	  
	// Hình Vuông
	$HinhVuong = new HinhVuong();
	$HinhVuong->Ve();
	echo '<br/>';
	$HinhVuong->canh = 20;
	echo 'Chu vi hình vuông là: '.'<br/>';
	echo $HinhVuong->tinh_Chu_Vi();
	echo '<br/>';
	echo 'Diện tích hình vuông là: '.'<br/>';
	echo $HinhVuong->tinh_Dien_Tich(); 
?>