<?php 
	require_once 'controller/user_controller.php';
	$linkUser = new UserController();
	$linkUser->handleRequest();
?>