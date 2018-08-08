<?php 
require_once './model/index_model.php';
class IndexController {
	function handleRequest() {
		$controller = isset($_GET['controller'])?$_GET['controller']:'index';
		$action = isset($_GET['action'])?$_GET['action']:'list';
		if ($controller == 'index') {
			switch ($action) {
				case 'list':
					$userModel = new IndexModel();
					$data 	   = $userModel->listUser();
					include 'views/user/list.php';
					break;
				case 'insurrance':
					$userModel = new IndexModel();
					$data 	   = $userModel->listInsurrance();
					include 'views/user/insurrance.php';
					break;
				case 'contract':
					$userModel = new IndexModel();
					$data 	   = $userModel->listContract();
					include 'views/user/contract.php';
					break;	
				case 'certification':
					
					include 'views/user/certification.php';
					break;	
				case 'skills':
					$userModel = new IndexModel();
					$data 	   = $userModel->listSkill();
					include 'views/user/skills.php';
					break;	
				case 'experience':
					$userModel = new IndexModel();
					$data 	   = $userModel->listExperience();
					include 'views/user/experience.php';
					break;	
				case 'fort':
					
					include 'views/user/fort.php';
					break;				
				default:
					# code...
					break;
			}	
		}		
	}
	// ham nay de redirect trang
	function redirectPage($link) {
		header("Location: $link");
	}
}
?>