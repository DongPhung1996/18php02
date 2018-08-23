<?php 
require_once './model/index_model.php';
class IndexController {
	function handleRequest() {
		$controller = isset($_GET['controller'])?$_GET['controller']:'index';
		$action = isset($_GET['action'])?$_GET['action']:'list_info_user';
		if ($controller == 'index') {
			switch ($action) {
				case 'list_info_user':
					$userModel = new IndexModel();
					$data 	   = $userModel->listUser();
					include 'views/index/information_user/list.php';
					break;
				case 'insurrance':
					$userModel = new IndexModel();
					$data 	   = $userModel->listInsurrance();
					include 'views/index/insurrance.php';
					break;
				case 'contract':
					$userModel = new IndexModel();
					$data 	   = $userModel->listContract();
					include 'views/index/contract.php';
					break;	
				case 'certification':				
					include 'views/index/certification.php';
					break;	
				case 'skills':
					$userModel = new IndexModel();
					$data 	   = $userModel->listSkill();
					include 'views/index/skills.php';
					break;	
				case 'experience':
					$userModel = new IndexModel();
					$data 	   = $userModel->listExperience();
					include 'views/index/experience.php';
					break;	
				case 'fort':			
					include 'views/index/fort.php';
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