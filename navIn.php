<ul class="nav navbar-nav">
	<li><a href="index.php">Home</a></li>
	<li><a href="postcards.php">Postcards</a></li>
	<li><a href="events.php">Events</a></li> 
	<li><a href="">My Diary</a></li>
	<li><a href="logout.php">Log out</a></li>
	<li><a href="myProfile.php" id="nav-profile-picture"><img src="showProfilePicture.php?ID=<?php echo $_SESSION['userID']; ?>"></a></li>
	<li><a class="box-btn" href="createPostcard.php">ADD NEW</a></li> 
</ul>