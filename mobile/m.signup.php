<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
	<?php include 'm.head.php'; ?>
	<head>
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
				
				<p id="signup-mail">
					<input type="email" name="email" placeholder="Your email" required /> 
				</p>

				<p id="signup-password">
					<input type="password" name="password" placeholder="Your password" required />
				</p>

				<input type="submit" name="submit" value="SIGN UP" />
			</form>

		</div>

		<a href="" class="Btn" id="fb-login">SIGN UP WITH FACEBOOK</a>
			
		<a href="" class="Btn" id="t-login">SIGN UP WITH TWITTER</a>
			
	</body>

</html>