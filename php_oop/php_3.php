<?php
	class DongVat{

		public $bien_public;

		protected $bien_protected;

		private $bien_private;

		public function a()
		{
			$this->bien_private;
		}

		protected function b()
		{
			# code...
		}

	}
	//$this là một thế hiện, chỉ hoạt động trong function
	class concho extends DongVat{

		public function test(){
			$this->bien_protected;
		}
	}

	$a = new DongVat();
	// $a->bien_protected;

	$b = new concho();
	$b->test();
?>
