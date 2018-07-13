<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<style type="text/css">
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}
			body{
				background-color: #ded0d0;
			}
			#contact{
				width: 800px;
				height: 400px;
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
				width: 700px;
				margin: 0 auto;
				font-weight: bold;
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
			form input{
				width: 450px;
				height: 40px;
				margin: 10px;
				padding: 10px;
			}
			form label{
				text-transform: uppercase;
				margin: 10px;
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
		<div id="contact">
			<div class="header">
				<h1>Contact</h1>
			</div>	
			<form action="" method="POST">
				<fieldset>
					<legend>Information</legend>
					<label>Email:</label>
					<input type="text" name="email">
					<br>
					<label>Phone:</label>
					<input type="text" name="phone">
					<br>
					<input class="but" type="submit" name="contact" value="Contact">
				</fieldset>
			</form>
		</div>
	</body>
</html>