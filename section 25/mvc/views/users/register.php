<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		#register{
			width: 800px;
			height: 500px;
			margin: 0 auto;
			border: 1px solid black;
			border-top: none;
			background-image: url(images/1.jpg);
			background-repeat: no-repeat;
			color: #fff;
		}
		.header{
			text-align: center;
			margin-bottom: 15px;
			padding-top: 20px;
			text-transform: uppercase;
		}
		form{
			width: 525px;
			margin: 0 auto;
			font-weight: bold;
			background-image: url(images/2.jpg);
			background-repeat: no-repeat;
		}

		form fieldset{
			width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-image: url(images/2.jpg);
			background-repeat: no-repeat;
		}
		form legend{
			text-align: center;
		}

		form label{
			text-transform: uppercase;
			margin: 10px;
		}

		form input{
			width: 450px;
			height: 40px;
			margin: 10px;
			padding: 10px;
			border-radius: 10px;
		}
		
		form .but{
			margin-left: 140px;
			margin-top: 20px;
			width: 200px;
			text-transform: uppercase;
			border-radius: 10px;
			border: 1px solid black;
			background-image: url(images/1.jpg);
			background-repeat: no-repeat;
			color: #fff;
			font-weight: bold;
			box-shadow: 5px 5px 5px black;
		}
		form .but:hover{
			color: orange;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="register">
		<div class="header">
			<h1>Register</h1>
		</div>	
		<form action="" method="post">
			<fieldset>
				<legend>INFO</legend>
				<label>Email</label>
				<input type="text" name="email">
				<p><input type="submit" name="register" value="Register" class="but"></p>
			</fieldset>			
		</form>
	</div>
</body>
</html>