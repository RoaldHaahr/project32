<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="signup-completion-page">
		
		<form id="signup-completion-form">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Complete your profile</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p class="role-radio" id="tourist-radio">
							<input type="radio" name="role" value="tourist">I'm a tourist
						</p>
					</div>
					<div class="col-md-6">
						<p class="role-radio" id="traveler-radio">
							<input type="radio" name="role" value="traveler">I'm a traveler
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

						<div id="user-picture-btn"><p id="choose-picture"><font color="white"> Choose picture</font><input id="user-picture-upload" type="file" name="user-picture" value="Choose picture"></p></div>

					</div>

					<div class="col-md-5">
						<div id="nationality-and-description">
							<select name="user-nationality">
								<option selected disabled placeholder="Your nationality" ><li id="nationality">Your nationality </li></option>
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