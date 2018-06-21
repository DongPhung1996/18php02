<?php
	abstract class DongVat{
		public $chan  = 4;

		abstract function run($chan);

		public function eat(){

		}
	}
	class concho extends DongVat{

		public function run($chan){
			echo "Chay bang 4 chan!";
		}
	}

	class connguoi extends DongVat{

		public function run($chan){
			echo "Chay bang 2 chan!";
		}
	}

	$concho = new concho();
	$concho->run($chan);

?>