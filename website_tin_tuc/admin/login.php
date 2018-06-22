	<?php
	include '../apps/boostrap.php';
		$router = new Apps_Libs_Router();

		$account = trim($router->getPOST('account'));
		$password = trim($router->getPOST('password'));
		$identity = new Apps_Libs_UserIdentity();
		if ($identity->isLogin()) {
			header("Location: home.php");
		}

		if ($router->getPOST("submit") && $account && $password) {
			$identity->username = $account;
			$identity->password = $password;
			if ($identity->login()) {
				header("Location:?r=post");
			}else{
				echo "username or password is correct!";
			}
		}
	?>
<html>
	<head>
		<title>Login</title>
		<style type="text/css">
			h1{
				text-align: center;
			}
			form{
				width: 300px;
				margin: auto;
				border: 1px solid black;
				text-align: center;
				padding: 10px;
			}
			input{
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<div>
			<h1>Login</h1>
		</div>
		<form action="<?php echo $router->createUrl('login') ?>" method="POST">
			Account:
			<br>
			<input type="text" name="account"><br>
			Password: 
			<br>
			<input type="password" name="password">
			<br>
			<input type="submit" name="submit" value="login">
		</form>
	</body>
</html>