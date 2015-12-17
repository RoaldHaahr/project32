<?php
$page = 'event';
?>
<?php
include_once('header.php');
?>
<?php
include_once('nav.php');
?>

<?php
include_once('connection.php');
?>

<?php
$sql = "SELECT ID, event_name_0, event_description, event_date, event_image_url, event_location, filetype, image FROM events WHERE " . $_GET['ID'] . " = ID";

try {
    $st = $conn->prepare($sql);
    $st->execute();
    $row = $st->fetch();
}
catch (PDOException $e) {
    echo "Server error - try again! " . $e->getMessage();
}

if (empty($row['event_image_url'])) {
    $image = 'showEventImage.php?ID=' . $row['ID'];
} else {
    $image = $row['event_image_url'];
}

$eid  = $row['ID'];
$uid  = $_SESSION['userID'];
$sql2 = $conn->prepare("SELECT * FROM eventslocals WHERE  lid=$uid AND eid=$eid");
$sql2->execute();
$eventss = $sql2->rowCount();
?>
	<section class="page" id="event-page">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"><?php
echo $row['event_name_0'];
?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<figure class="event-picture">
							<img src="<?php
echo $image;
?>">
						</figure>
					</div>

					<div class="col-md-4">
						<div class="event-info">
							<time class="event-time"><?php
echo date('M d Y', $row['event_date']);
?></time><br>
							<span class="event-place"><?php
echo $row['event_location'];
?></span>
							<p id="event-text">
								<?php
echo $row['event_description'];
?>
							</p>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
                

                <?php
if ($_SESSION['role'] == 'Local' && $eventss == 0) {
?>
                	<div class="row">
	                	<a href="#" id="guide-button"> Become a guide! </a>
	                </div>
                <?php
} 
    $sql3 = $conn->prepare("SELECT lid, eid FROM eventslocals WHERE  eid=$eid");
    $sql3->execute();
    $rowsloc = $sql3->fetchAll();
    $isGoing = $rowsloc[0][0];
    
    $sql4 = $conn->prepare("SELECT name FROM users WHERE ID=$isGoing");
    $sql4->execute();
    $rowslocs2 = $sql4->fetchAll();
	echo '<div class="row">
						<div class="col-md-12">
							<h4 class="local-folks-title">Local folks who can guide you during the event.<br>Get in touch with them!</h4>
						</div>

					</div>';
	
	foreach ($rowslocs2 as $rowsloc2) {  echo '
					<div class="row">
						<div class="col-md-12" id="guide-links"><p> '.$rowsloc2[0].' -> </p></div>
					</div>';

    }

?>
				

			</div>

	</section>

<?php
include_once('footer.php');
?>
