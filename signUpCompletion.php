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
						<p class="role-radio" id="traveler-radio">
							<input type="radio" name="role" value="Traveler">I'm a traveler
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<figure id="signup-profile-picture"><img src="images/image-preview.png"></figure>
					</div>
					<div class="col-md-4">
						<label for="user-picture">

							Upload your profile picture

						</label>
<<<<<<< HEAD

						<div id="user-picture-btn"><p id="choose-picture"><font color="white"> Choose picture</font><input id="user-picture-upload" type="file" name="user-picture" value="Choose picture"></p></div>

=======
						
                        <input id="user-picture-upload" type="file" name="image" value="Choose picture" >
>>>>>>> origin/master
					</div>

					<div class="col-md-5">
						<div id="nationality-and-description">
							<select name="user-nationality">
<<<<<<< HEAD
								<option selected disabled placeholder="Your nationality" ><li id="nationality">Your nationality </li></option>
=======
								<option selected disabled>Your nationality</option>
								<?php include_once('getCountries.php'); ?>
>>>>>>> origin/master
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