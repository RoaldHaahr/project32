<?php include 'getUserProfile.php'; ?>
<!DOCTYPE html>
<html>
	
	<?php include 'm.head.php'; ?>

	<body>
		
		<header>
				<a href="m.postcards.php" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>
				<button class="addBtn" onclick="window.location.assign('m.addPostcard.php')"><img src="img/plus.png" alt="" class="plus"></button>
	
		</header>

		<div id="red">
			
			<div class="container2">
				
				<?php
					echo $profilePicture;
					echo '<h1 class="white">'.$row["name"].'</h1>';
					echo '<p class="white small">- '.$row["role"].' -</p>';
					echo '<p class="white">'.$row["description"].'</p>';
				?>

			</div>
		</div>

		<div class="container">
			
			<?php
				echo '<p>Email: '.$row["email"].'</p>';
				echo '<p>Nationality: '.$row["country"].'</p>';
			?>

			
			<div class="row">
				<div class="col-xs-12">
					<a class="orangeBtn" href="m.completProfile.php">Edit</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<a class="whiteBtn" href="logOut.php">Log Out</a>
				</div>
			</div>

		</div>

	 <footer>
    	<div class="row">
    		<div class="col-xs-3">
    			<input type="button" value="Events" class="eventBtn" onclick="window.location.assign('m.events.php')">
    		</div>
		
    		<div class="col-xs-3">
    			<input type="button" value="Postcards" class="postcardsBtn" onclick="window.location.assign('m.postcards.php')">
			</div>

    		<div class="col-xs-3">
    			<input type="button" value="Diary" class="diaryBtn" onclick="window.location.assign('m.Diary.php')">
    		</div>

    		<div class="col-xs-3">
    			<div class="active">
    				<input type="button" value="Profile" class="profileBtn" onclick="window.location.assign('m.yourProfile.php')">
    			</div>
    		</div>
    	</div>
    
    </footer>

	</body>
</html>