<?php
	session_start();
	if (isset($_SESSION['login'])) {
		require_once 'controller/admin_controller.php';
		$linkAdmin = new AdminController();
		$linkAdmin->handleRequest();
	}
	else {
		header('Location: login.php');
	}
?>