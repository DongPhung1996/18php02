<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<style type="text/css">
		#head{
			text-align: center;
			margin-top: 25px;
			margin-bottom: 25px;
		}
		.menu{
			margin-top: 40px;
			width: 800px;
			margin: 0 auto;
			height: 50px;
		}
		ul li{
			list-style: none;
			width: 200px;
			height: 50px;
			line-height: 50px;
			background-color: #8080bb;
			text-align: center;
			float: left;
		}
		ul li a{
			text-decoration: none;
			text-transform: uppercase;
			font-weight: bold;
			color: #fff;
		}
		ul li:hover{
			background-color: violet;
		}
		ul li a:hover{
			color: red;
		}
	</style>
</head>
<body>
	<div id="head">
		<h1>Trang INDEX</h1>
	</div>
	<div class="menu">
		<ul>
		    <li><a href="index.php?action=home">HOME</a></li>
	 		<li><a href="index.php?action=register">REGISTER</</a></li>
	 		<li><a href="index.php?action=contact">CONTACT</a></li>
		</ul>
	</div>
</body>
</html>


<?php 
	include 'controller/home_controller.php';
	$home = new HomeController();
	$home->handleRequest();
?>