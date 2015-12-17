<?php $page='userprofile'; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>
<?php
	include_once('connection.php');

	session_start();

	$sql = "SELECT * FROM users WHERE ID = " . $_GET['ID'];

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
	} catch (PDOException $e) {
		echo "Server error - try again!<br>" . $e->getMessage();
	}

	$profilePicture = '<img src="showProfilePicture.php?ID=' . $_GET['ID'] . '" class="profile-picture">';
?>

	<section class="page" id="user-profile-page">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<?php 
							echo '<h2 class="page-title">' . $row["name"] . '</h2>';
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<?php 
							echo $profilePicture;
							echo '<h4 class="user-role">-' . $row["role"] . '-</h4>';
							echo '<p id="user-description">' . $row["description"] . '</p>';
							echo '<p id="nationality">Nationality: ' . $row["country"] . '</p>';
						?>						
					</div>

					<div class="col-md-4">
						<form id="contact-form" action="handleMail.php" method="post">
							<?php 
							echo '<h3>Get in contact with ' . $row["name"] . '</h3>';
							?>
							<div><input type="text" name="subject" placeholder="Subject"></div>
							<div><textarea name="message" placeholder="Your message"></textarea></div>
							<input type="submit" class="link-button red-link" value="Contact">
						</form>
						
					</div>
					<div class="col-md-2"></div>
				</div>
				
						<h3>Postcard sent:</h3>
						<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
						<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
							<script>
							$( "html" ).addClass( "no-js" );
							</script>
							<script src="js/modernizr.custom.js"></script>
								
								<section id="postcards-page" class="container demo-1 page">
									<!-- Top Navigation -->
									
									<ul class="grid cs-style-1">
										<?php require('getUserPostcards.php'); ?>
										
									</ul>
								</div><!-- /container -->
								<script src="js/toucheffects.js"></script>

									</div>

							</section>
					</div>
				</div>

			</div>

	</section>

<?php include_once('footer.php'); ?>