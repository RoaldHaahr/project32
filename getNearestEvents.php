<?php 

	include_once('connection.php');

	$sql = "SELECT ID, la, lo, event_name_0, event_description, event_date, event_image_url, filetype, image FROM events";

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}

	if(isset($_POST['coordinates'])) {
		$geo = json_decode($_POST['coordinates'], true);
		$x = $geo['x'];
		$y = $geo['y'];;
	}

	$array = array();

	foreach ($rows as $row) {
		$array[$row['ID']] = distance($x, $y, $row['la'], $row['lo']);
	}

	asort($array);

	$events = "";

	foreach ($array as $key => $val) {
	 	foreach ($rows as $row) {
	 		if($key == $row['ID']) {
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
							<div class="col-md-4">
								<time>' . date('M d, Y', $date) . '</time>
							</div>
							<div class="col-md-4 event-picture">
								<img class="events-picture" src="' . $image . '" alt="">
							</div>
							<div class="col-md-4">
								<h3 class="eventtitle">' . $name . '</h3>
								<p>
									<time>' . date('H i', $date) .'</time>
									<span class="event-location"></span>
									<p class="event-description">' . $description . 'distance:' . $val . '</p>
								</p>
							</div>
						</div>';
				}
	 		}
		}
	}

	echo $events;
	$conn = null;

	//http://stackoverflow.com/questions/10053358/measuring-the-distance-between-two-coordinates-in-php
	function distance($lat1, $lon1, $lat2, $lon2) {
	  $rad = M_PI / 180;
	  return acos(sin($lat2*$rad) * sin($lat1*$rad) + cos($lat2*$rad) * cos($lat1*$rad) * cos($lon2*$rad - $lon1*$rad)) * 6371;// Kilometers
	}

?>