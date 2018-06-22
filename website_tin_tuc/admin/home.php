<?php
	include '../apps/boostrap.php';
	$user = new Apps_Libs_UserIdentity();
	$router = new Apps_Libs_Router();
?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<div>
			<h1>Hi <?= $user->getSession("username")?></h1>
			<p>Welcome to manage</p>	
			<a href="logout.php">Logout</a>
			<h1>ADMIN PAGE</h1>
		</div>
		<div class="show-data">
			<ul>
				<li><a href="<?<!-- = $router->createdUrl('post/post')  -->?>">Manage Posts</a></li>
				<li><a href="categories/index.php">Manage Categories</a></li>
				<li><a href="<?<!-- = $router->createdUrl('user/users') -->?>">Manage Users</a></li>
			</ul>
		</div>
	</body>
</html>