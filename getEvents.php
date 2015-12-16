<?php
	include_once('connection.php');

	$sql = "SELECT event_name_0, event_description, event_date, event_image_url, filetype, image FROM events";

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}

	$events = '';

	foreach($rows as $row) {
		$name = $row['event_name_0'];
		$date = $row['event_date'];
		$description = $row['event_description'];
		$image = $row['event_image_url'];

		if(strtotime(date('d F Y', strtotime('01 November 2015'))) < $date ) {

			$events .= '
				<div class="row events-list-item">
					<div class="col-md-4">
						<time>' . date('M d, Y', $date) . '</time>
					</div>
					<div class="col-md-4">
						<img class="events-picture" src="' . $image . '" alt="">
					</div>
					<div class="col-md-4">
						<h3 class="eventtitle">' . $name . '</h3>
						<p>
							<time>' . date('H i', $date) .'</time>
							<span class="event-location"></span>
							<p class="event-description">' . $description . '</p>
						</p>
					</div>
				</div>';

		}
	}

	echo $events;

	$conn = null;

?>