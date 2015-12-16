<?php $page=userprofile; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="user-profile-page">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Michael White</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<figure class="profile-picture">
							<img src="images/michaelwhite.png">
						</figure>
						<h4 class="user-role">-Tourist-</h4>
						<p id="user-description">
							Graphic designer and art lover. I travel to meet new inspiring people and to admire architecture and art. I love to write short stories about places I visited.
						</p>
						<p id="nationality">
							<strong>Nationality: </strong>French
						</p>						
					</div>

					<div class="col-md-4">
						<form id="contact-form" action="handleMail.php" method="post">
							<h3>Get in contact with Michael</h3>
							<div><input type="text" name="subject" placeholder="Subject"></div>
							<div><textarea name="message" placeholder="Your message"></textarea></div>
							<input type="submit" class="link-button red-link" value="Contact">
						</form>
						
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
				</div>

			</div>

	</section>

<?php include_once('footer.php'); ?>