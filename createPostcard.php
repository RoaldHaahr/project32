<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="create-postcard-page">
		
			<div class="container-fluid">
				
				<form action="addPostcard.php" method="post" id="create-postcard-form" enctype="multipart/enctype">
					<div class="row">
						<div class="col-md-12">
							<h2 class="page-title">Create a new postcard</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div id="postcard-image">
								<img src="images/xbox.png">
							</div>
							<textarea name="story" class="story" placeholder="Your story"></textarea>
							<input type="text" class="story" placeholder="Tags, places, etc.">
						</div>
						<div class="col-md-7">
							<div id="pre-image">
								<h3>Choose one from our photos</h3>
								<p>
									<img src="../images/">
									<img src="../images/">
									<img src="../images/">
									<img src="../images/">
									<img src="../images/">
									<img src="../images/">
								</p>
							</div>
							<div id="choose-postcard-image">
								<h3>or</h3>
								<div id="user-picture-btn">
                                <p id="user-picture-text"> Choose from your picture </p>
									<input type="file" name="postcard-picture" id="user-picture-upload">
								</div>
							</div>
							<p>
								<input type="submit" class="link-button yellow-link">
							</p>
						</div>
					</div>
				</form>

			</div>

	</section>

<?php include_once('footer.php'); ?>