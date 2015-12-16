<!DOCTYPE html>
<html>
	<head>
			<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />
		

		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="m.style.css" />
		

		<style>
			html, body{
				background-color: #eee;
	        }
		</style>

	</head>
	</head>

	<body>

		<header>
	
			<div class="row">
			
				<a href="m.postcards.php" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>
				
			</div>

		</header>

		<div class="container">

			<h1 class="black">Create a new postcard</h1>
			<form action="receiveData.php" method="post" enctype="multipart/form-data">

				<input type="text" name="title" placeholder="Title" required autofocus />
			
				<a href="m.addPicture.php">
					<div class="photobox">
						<p>Add Photo</p>
					</div>
				</a>
				<input id="user-picture-upload" type="file" name="user-picture" value="Choose picture">

				<input type="text" name="location" placeholder="Location" required autofocus />
			
		
				<input type="text" name="tags" placeholder="Tags" required autofocus />
			
		
				<textarea name="content" cols="30" rows="10" placeholder="content" required autofocus></textarea>
					
				
				<div class="row">
					<div class="col-xs-6">
						<p class="checkboxText">
							<input type="radio" name="type" value="1" checked> Public
						</p>
					</div>

					<div class="col-xs-6">
						<p class="checkboxText">
							<input type="radio" name="type" value="2"> Private
						</p>
					</div>
				</div>

				<input type="submit" value="Save">
			</form>

	</div>

	<footer>
    	<div class="row">
    		<div class="col-xs-3">
    			<a href="m.events.php">
					<img src="img/calender.png" alt="" class="menuitem"> <br />Events
				</a>
    		</div>
		
    		<div class="col-xs-3">
    		<div class="active">
    			<a href="m.postcards.php">
					<img src="img/postcard.png" alt="" class="menuitem" /> <br /> Postcard
				</a>
			</div>
    		</div>

    		<div class="col-xs-3">
    			<a href="m.diary.php">
					<img src="img/diary.png" alt="" class="menuitem" /> <br />Your Diary
				</a>
    		</div>

    		<div class="col-xs-3">
    			<a href="m.yourProfile.php">
					<img src="img/user.png" alt="" class="menuitem" /> <br />Your Profil
				</a>
    		</div>
    	</div>
    

	</body>

</html>