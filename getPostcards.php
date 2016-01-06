<?php
	include_once('connection.php');

	$sql = "SELECT ID, userID, location, content, title, picture, filetype, tags FROM postcards WHERE type=1";

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
		$location = $row['location'];
		$description = $row['content'];
		$username = $row['name'];
		$pid = $row['ID'];
		$title = $row['title'];
		$liked= false;
		foreach($likeRows as $likeRow){
			if($row['ID'] == $likeRow['pid']){
		$liked= true;
					$postcards .= '<li>
						<figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="'.$row['tags'].'">
							<figcaption>
							<p>'.$row['content'].' </p>

							</figcaption>
						</figure>
						<h3>' . $title . '</h3>
						<span class="postcard-auth">Send by: '.$username.'</span>
						<span class="postcard-tags">Tags: '.$row['tags'].'</span>
						<div class="share"></div>
						<p class="like" id="'.$pid.'" title="Unlike">Unlike</p>
					</li>';
				
			}
		}
		if($liked== false){
			$postcards .= '<li>
						<figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="'.$row['tags'].'">
							<figcaption>
							<p>'.$row['content'].' </p>
							</figcaption>
						</figure>
						<h3>' . $title . '</h3>
						<span class="postcard-auth">Send by: '.$username.'</span>
						<span class="postcard-tags">Tags: '.$row['tags'].'</span>
						<div class="share"></div>
						<p class="like" id="'.$pid.'" title="Like">Like</p>
					</li>';
		}
	}
	}
	else{
		foreach($rows as $row) {
		$username = $row['name'];
		$title = $row['title'];
		$location = $row['location'];
		$description = $row['content'];

		$postcards .= '<li>
						<figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="'.$row['location'].'">
							<figcaption>
							<p>'.$row['content'].' </p>
							</figcaption>
						</figure>
						<h3>' . $title . '</h3>
						<span class="postcard-auth">Send by: '.$username.'</span>
						<span class="postcard-tags">Tags: '.$row['location'].'</span>
						<div class="share"></div>
						</figure>
					</li>';
	}
		}
	echo $postcards;

	$conn = null;

?>


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