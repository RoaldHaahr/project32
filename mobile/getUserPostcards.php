<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
	include_once('connection.php');

	$sql = "SELECT name, postcards.ID, userID, location, content, title, postcards.picture, postcards.filetype, tags 
			FROM users, postcards 
			WHERE type = 1 AND users.ID = userID AND userID = " . $_GET['ID'];

		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	
$likess=0;
$showLikes = false;
if(isset($_SESSION['userID'])){
	$showLikes = true;
$uid=$_SESSION['userID'];
		$sql2=$conn->prepare("SELECT * FROM likestbl WHERE  uid=$uid");
		$sql2->execute();
		$likeRows = $sql2->fetchAll();
		
}
$postcards = "";
if($showLikes){
	foreach($rows as $row) {
		$title = $row['title'];
		$location = $row['location'];
		$userID = 	$row['userID'];
		$description = $row['content'];
		$pid = $row['ID'];
		$username = $row['name'];
		$liked= false;
		foreach($likeRows as $likeRow){
			if($row['ID'] == $likeRow['pid']){
		$liked= true;
		$postcards .= '<figure class="postcardbox">
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<p class="content">' . $description . '</p>
								<p class="sender">Sent by: <a href="m.profile.php?ID=' . $userID . '">' . $username . '</a></p>
								<p class="like" id="'.$pid.'" title="Unlike">Unlike</p>
							</figcaption>
						</figure>';
	}
		} 
		if($liked== false){
			$postcards .= '<figure class="postcardbox">
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<p class="content">' . $description . '</p>
								<p class="sender">Sent by: <a href="m.profile.php?ID=' . $userID . '">' . $username . '</a></p>
								<p class="like" id="'.$pid.'" title="Like">Like</p>
							</figcaption>
						</figure>';
	}
			}
		}
else{
		foreach($rows as $row) {
		$title = $row['title'];
		$location = $row['location'];
		$description = $row['content'];
		$userID = $row['userID'];
		$username = $row['name'];
		$postcards .= '<figure class="postcardbox">
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<p class="content">' . $description . '</p>
								<p class="sender">Sent by: <a href="m.profile.php?ID=' . $userID . '">' . $username . '</a></p>
							</figcaption>
						</figure>';
		
		}
		}
	echo $postcards;
	$conn = "";
?>

<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jssocials-1.0.0/jquery.js"></script>
    <script src="js/jssocials-1.0.0/jssocials.min.js"></script>
    <script>
        $(".share").jsSocials({
            shares: ["email", "twitter", "facebook", "googleplus", "pinterest"]
        });


var that;
$(document).ready(function(){
 $('.like').click(function(){
  if($(this).attr('title') == 'Like'){
   that = $(this);
   $.post('action.php', {pid:$(this).attr('id'), action:'like'},function(){
    that.text('Unlike');
    that.attr('title','Unlike');
   });
  }else{
   if($(this).attr('title') == 'Unlike'){
    that = $(this);
    $.post('action.php', {pid:$(this).attr('id'), action:'unlike'},function(){
     that.text('Like');
     that.attr('title','Like');
    });
	
   }
  }
 });
});
</script>
