<!DOCTYPE html>
<html>
	<?php include 'm.head.php'; ?>

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
    			<input type="button" value="Events" class="eventBtn" onclick="window.location.assign('m.events.php')">
    		</div>
		
    		<div class="col-xs-3">
	    		<div class="active">
	    			<input type="button" value="Postcards" class="postcardsBtn" onclick="window.location.assign('m.postcards.php')">
				</div>
    		</div>

    		<div class="col-xs-3">
    			<input type="button" value="Diary" class="diaryBtn" onclick="window.location.assign('m.Diary.php')">
    		</div>

    		<div class="col-xs-3">
    			<input type="button" value="Profile" class="profileBtn" onclick="window.location.assign('m.yourProfile.php')">
    		</div>
    	</div>
    
    </footer>

</html>