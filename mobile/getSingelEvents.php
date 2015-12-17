<?php
	include_once 'connection.php';

	$sql = "SELECT ID, event_name_0, event_description, event_date, event_location, event_image_url, filetype, image FROM events WHERE " . $_GET['ID'] . " = ID";
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
		$location = $row['event_location'];
		$description = $row['event_description'];
		$image = $row['event_image_url'];
		
		
			$events .= '
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

				<div class="eventbox">
					<div class="row">
						<div class="col-xs-12">
							<p class="event-text">' . $description . '</p>
						</div>
					</div>
				</div>';
		
	}
	echo $events;
	
	$conn = null;
?>

