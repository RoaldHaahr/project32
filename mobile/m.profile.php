<?php include 'getProfile.php'; ?>
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
					echo '<h1 class="white">' . $row["name"] . '</h1>';
					echo '<p class="white small">- ' . $row["role"] . ' -</p>';
					echo '<p class="white">' . $row["description"] . '</p>';
				?>

				<div class="row">
					<div class="col-xs-12">
						<a class="orangeBtn" href="#contactModal">CONTACT</a>
					</div>
				</div>
				
			</div>
		</div>

		<div id="contactModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
					
					<form id="contact-form" action="handleMail.php" method="post">
						<?php 
							echo '<h3>Get in touch with ' . $row["name"] . '</h3>';
						?>
						<div><input type="text" name="subject" placeholder="Subject"></div>
						<div><textarea name="message" placeholder="Your message"></textarea></div>
						<input type="submit" class="link-button red-link" value="Contact">
					</form>

			</div>
		</div>

		<div class="container">
			
			<?php
				echo '<p>Email: '.$row["email"].'</p>';
				echo '<p>Nationality: '.$row["country"].'</p>';
			?>

			<p>Postcards sent:</p>

			<?php include 'getUserPostcards.php'; ?>

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