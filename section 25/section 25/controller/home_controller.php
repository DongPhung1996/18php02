<?php 
class HomeController{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($action) {
			case 'home':
				# code...
				include './views/home/index.php';
				break;
			
			case 'register':
				# code...
				include './views/users/register.php';
				break;
			
			default:
				# code...
				break;
		}
	}
}
?>