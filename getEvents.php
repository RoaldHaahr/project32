<?php
	include_once('connection.php');

	$sql = "SELECT ID, event_name_0, event_description, event_date, event_location, event_image_url, filetype, image FROM events ORDER BY event_date DESC";

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
		if(empty($row['event_image_url'])) {
			$image = 'showEventImage.php?ID=' . $row['ID'];
		} else {
			$image = $row['event_image_url'];
		}

		if(strtotime(date('d F Y', strtotime('01 November 2015'))) < $date ) {

			$events .= '
				<div class="row events-list-item">
					<div class="col-md-4 event-date">
						<time>' . date('M d, Y', $date) . '</time>
						<br>
						<time>' . date('H i', $date) .'</time>
					</div>
					<div class="col-md-4 event-picture">
						<img class="events-picture" src="' . $image . '" alt="">
					</div>
					<div class="col-md-4 event-details">
						<h3 class="eventtitle"><a href="event.php?ID=' . $row['ID'] . '">' . $name . '</a></h3>

							<span class="event-location">' . $row['event_location'] . '</span>
							<p class="event-description">' . $description . '</p>
					</div>
				</div>';

		}
	}

	echo $events;

	$conn = null;

?>