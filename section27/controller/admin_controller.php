<?php 
require_once './model/user_model.php';
class AdminController {
	function handleRequest() {
		$controller = isset($_GET['controller'])?$_GET['controller']:'users';
		$action     = isset($_GET['action'])?$_GET['action']:'list';
		if($controller == 'products') {
			switch ($action) {
				case 'list':
					include 'views/admin/products/list.php';
					break;
				case 'add':
					if(isset($_POST['add_product'])) {
						$name 		  = $_POST['name'];
						$image 		  = $_FILES['image']['name'];
						$price        = $_POST['price'];
						$productModel = new UserModel();
						$result       = $productModel->addProduct($name, $image, $price);
						$folder       = "images/";
						move_uploaded_file($image, "images".$image);
						if($result) {
							$this->redirectPage('admin.php?controller=products&action=list');
						}						
					}
					include 'views/admin/products/add.php';
					break;
				default:
					# code...
					break;
			}
		}elseif($controller == 'users') {
			switch ($action) {
				case 'list':
					// if (isset($_POST['list_user'])) {
					// 	$role 		= $_POST['role'];
					// 	$userModel  = new UserModel();
					// 	$result     = $userModel->listUser($role);
					// 	if ($result) {
					// 		$this->redirectPage('admin.php?controller=users&action=list');
					// 	}
					// }
					include 'views/admin/users/list.php';
					break;
				case 'add':
					if(isset($_POST['add_user'])) {
						$username  = $_POST['username'];
						$password  = $_POST['password'];
						$role      = $_POST['role'];
						$userModel = new UserModel();
						$result    = $userModel->addUser($username, $password, $role);
						if($result) {
							$this->redirectPage('admin.php?controller=users&action=list');
						}						
					}
					include 'views/admin/users/add.php';
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