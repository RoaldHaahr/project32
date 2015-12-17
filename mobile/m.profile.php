<?php include 'getProfile.php'; ?>
<!DOCTYPE html>
<html>
	<?php include 'm.head.php'; ?>

	<body>
		
		<header>
				<a href="m.postcards.php" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>
				
				<a href="m.addPostcard.php"><img src="img/plus.png" alt="" class="plus"></a>
	
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
    			<a href="m.events.php">
					<img src="img/calender.png" alt="" class="menuitem"> <br />Events
				</a>
    		</div>
		
    		<div class="col-xs-3">
    			<a href="m.postcards.php">
					<img src="img/postcard.png" alt="" class="menuitem" /> <br /> Postcard
				</a>
    		</div>

    		<div class="col-xs-3">
    			<a href="m.diary.php">
					<img src="img/diary.png" alt="" class="menuitem" /> <br />Your Diary
				</a>
    		</div>

    		<div class="col-xs-3">
	    		<div class="active">
	    			<a href="m.yourProfile.php">
						<img src="img/user.png" alt="" class="menuitem" /> <br />Your Profil
					</a>
				</div>
    		</div>
    	</div>
    
    </footer>

	</body>
</html>