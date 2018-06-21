<?php
	//Ý nghĩa khi sử dụng các lớp truy cập
	class database{
		protected $result = []; //không thể để public để protected  để sau khi query xong thì thằng result ms nhận giá trị

		function getResult(){
			return $this->result;
		}

		protected function setResult($result){
			//có thể xử lý thêm code 
			return $this->result;
		}

		public function query()
		{
			$this->setResult([1,2,3]);
			return $this->result;
		}
	}

	$a = new database();
	$a->getResult();

?>