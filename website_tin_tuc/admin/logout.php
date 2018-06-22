<?php
	include '../apps/boostrap.php';
	$user = new Apps_Libs_UserIdentity();
	$user->logout();

	header("Location: login.php");

?>	