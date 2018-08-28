<?php 
	session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name'])){
		require_once 'controller/user_controller.php';
		$linkUser = new UserController();
		$linkUser->handleRequest();
	} else {
		header("Location: login_user.php");
	}
	
?>