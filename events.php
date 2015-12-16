<?php $page='events'; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

<section id="events-page" class="page">
	<figure id="events-banner">
		<img src="images/events-background.jpg" alt="event banner">
	</figure>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-6"><a class="events-links" id="newest-events" href="#">NEWEST EVENTS</a></div>
			<div class="col-md-6"><a class="events-links" id="nearest-events" href="#">EVENTS AROUND YOU</a></div>
		</div>
		<div id="events-list">

			<?php include_once('getEvents.php'); ?>
			
		</div>
			
			
		</div>
	</div>
</section>