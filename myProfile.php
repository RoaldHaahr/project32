<?php $page=myprofile; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="loggedin-user-profile-page">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Michael White</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<figure class="profile-picture">
							<img src="images/michaelwhite.png">
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="user-role">-Tourist-</h4>
						<p id="user-description">
							Graphic designer and art lover. I travel to meet new inspiring people and to admire architecture and art. I love to write short stories about places I visited.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="user-information">
						<p>
							<strong>E-mail: </strong>m.white@gmail.com
						</p>
						<p>
							<strong>Nationality: </strong>French
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a class="link-button red-link" id="edit-link" href="signUpCompletion.php">EDIT</a>
					</div>
				</div>

			</div>

	</section>

<?php include_once('footer.php'); ?>