<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="signup-completion-page">
		
		<form id="signup-completion-form" action="updateUser.php" method="post" enctype="multipart/form-data">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Complete your profile</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p class="role-radio" id="tourist-radio">
							<input type="radio" name="role" value="Tourist">I'm a tourist
						</p>
					</div>
					<div class="col-md-6">
						<p class="role-radio" id="local-radio">
							<input type="radio" name="role" value="Local">I'm a Local
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<figure id="signup-profile-picture"><img src="images/image-preview.png" alt="Profile picture"></figure>
					</div>
					<div class="col-md-4">
						<label for="user-picture">

							Upload your profile picture

						</label>

						<div id="user-picture-btn"><p id="choose-picture"><font color="white"> Choose picture</font><input id="user-picture-upload" type="file" name="image" value="Choose picture"></p></div>

					</div>

					<div class="col-md-5">
						<div id="nationality-and-description">
							<select name="user-nationality">

								<option selected disabled>Your nationality</option>
								<?php include_once('getCountries.php'); ?>

							</select><br>
							<textarea name="user-description" placeholder="Write a short description"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="submit" value="SAVE">
					</div>
				</div>

			</div>
		</form>

	</section>

<?php include_once('footer.php'); ?>