<?php 
	include './model/user_model.php';
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
					//xu ly submit dang ky o day
					if(isset($_POST['register'])){
						$email = $_POST['email'];
						//goi model xu ly luu vao database
						$userModel = new UserModel();
						$userModel->register($email);
					}
					break;
				case 'contact';
					include './views/contact/contact.php';
					if(isset($_POST['contact'])) {
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$userModel2 = new UserModel();
						$userModel2->contact($email, $phone);					
					}
				
				default:
					# code...
					break;
			}
		}
	}
?>