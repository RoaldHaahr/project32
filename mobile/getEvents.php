<?php
	include_once 'connection.php';

	$sql = "SELECT ID, event_name_0, event_description, event_date, event_location, event_image_url, filetype, image FROM events ORDER BY event_date ASC";
	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}
	
	$events = '';
	foreach($rows as $row) {
		$eventID = $row['ID'];
		$name = $row['event_name_0'];
		$date = $row['event_date'];
		$location = $row['event_location'];
		$description = $row['event_description'];
		$image = $row['event_image_url'];
		
		if(strtotime(date('d F Y', strtotime('01 November 2015'))) < $date ) {
		
			$events .= '
				<a href="m.singelEvent.php?ID=' . $eventID . '">
                <div class="eventbox">
                    <div class="row">
                        <div class="col-xs-4" style="padding-right: 0px;">
                            <img src="' . $image . '" alt="" class="event-picture">
                        </div>

                        <div class="col-xs-8" style="padding-left: 0px;">
                            <h2>' . $name . '</h2>
                            <p class="event-text"><img src="img/clock-icon.png" alt="" class="event-icon">' . date('M, d, Y', $date) . ' ' . date('H i', $date) . '</p>
                            <p class="event-text"><img src="img/map-icon.png" alt="" class="event-icon">' . $location . '</p>
                        </div>   
                    </div>
                </div>
            </a>';
		}
	}
	echo $events;
	
	$conn = null;
?>

