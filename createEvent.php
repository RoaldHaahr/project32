<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

	<section class="page" id="create-event-page">
		
			<div class="container-fluid">
				
				<form action="addEvent.php" method="post" id="create-event-form" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-10">
							<h2 class="page-title">Create a new event</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p>Make an event, meet tourists from all over the world, promote your cafe or restaurant. Go through few simple steps and create event visible for all of the tourist visiting the website. Share event on your social media channels.  Enjoy company of new, amazing people who want to learn something about danish culture and lifestyle.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="event-name" id="create-event-name" placeholder="Name of the event">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<textarea name="event-description" placeholder="Write a short description about the event"></textarea>
						</div>
						<div class="col-md-6">
							<input name="event-date" placeholder="Choose date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
							<div id="create-event-picture">
								<input type="file" name="image" />	
							</div>
							<p>
								<input class="red-link link-button" type="submit" value="Create event">
							</p>
						</div>
					</div>
				</form>

			</div>

	</section>

<?php include_once('footer.php'); ?>