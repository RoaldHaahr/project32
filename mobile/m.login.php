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

	<body>
		<div class="container">

			
				<img src="img/icon.png" alt="" id="icon-log" />
			
				<h1>Log In</h1>
			
			<form action="loginCheck.php" method="post" enctype="multipart/form-data">
				
				<p id="login-email">
					<input type="email" name="email" placeholder="Your email" required />
				</p>
				
				<p id="login-password">
					<input type="password" name="password" placeholder="Your password" required />
				</p>

				<input type="submit" name="submit" value="LOG IN" />
			</form>

		</div>

		<a href="" class="Btn" id="fb-login">LOG IN WITH FACEBOOK</a>
			
		<a href="" class="Btn" id="t-login"><img src="" alt="">LOG IN WITH TWITTER</a>
			
	</body>

</html>