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

	<body>
		<div class="container">

			
				<img src="img/icon.png" alt="" id="icon-log" />
			
				<h1>Log In</h1>
			
			<form action="loginCheck.php" method="post" enctype="multipart/form-data">
				<p>
					<lable>
						<input type="text" name="username" placeholder="Your name" required />
					</lable>
				</p>
				<p>
					<lable>
						<input type="password" name="password" placeholder="Your password" required />
					</lable>
				</p>

				<input type="submit" name="submit" value="LOG IN" />
			</form>

		</div>

		<a href="" class="Btn" id="faceBtn"><img src="" alt=""> LOG IN WITH FACEBOOK</a>
			
		<a href="" class="Btn" id="twitBtn"><img src="" alt="">LOG IN WITH TWITTER</a>
			
	</body>

</html>