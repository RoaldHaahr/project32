<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />

		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="m.style.css" />

		<style>
			html, body{
				background-image: url(img/login.png);
				background-position: center;
	        	background-attachment: fixed;
	        	background-repeat: no-repeat;
	        	background-size: 100% 100%;
	        	color: #fff;
	        }
		</style>

	</head>

	<body id="login">
		<div class="container">

			
				<img src="img/icon.png" alt="" id="icon-log" />
			
				<h1>Sign up</h1>
			
			<form action="addUser.php" method="post">
				<input type="name" name="name" placeholder="Your name" required /> 
				<input type="email" name="email" placeholder="Your email" required /> 
				<input type="password" name="password" placeholder="Your password" required />

				<input type="submit" name="submit" value="SIGN UP" />
			</form>

		</div>

		<a href="" class="Btn" id="faceBtn"><img src="" alt=""> SIGN UP WITH FACEBOOK</a>
			
		<a href="" class="Btn" id="twitBtn"><img src="" alt="">SIGN UP WITH TWITTER</a>
			
	</body>

</html>