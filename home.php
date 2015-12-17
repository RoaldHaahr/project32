<?php $page='homepage'; ?>
<?php include_once('header.php'); ?>

	<nav id="front-page" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.php"><img src="images/logowhite.png"></a>
			</div>
			<div>
            <?php
	session_start();
	if(isset($_SESSION['loggedOn'])) {
		echo '	<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
		<li><a href="postcards.php">Postcards</a></li>
		<li><a href="events.php">Events</a></li> 
		<li><a href="">My Diary</a></li>
		<li><a href="logout.php">Log out</a></li>
		<li><a href="myProfile.php" id="nav-profile-picture" alt="Profile picture"><img src="showProfilePicture.php?ID=' . $_SESSION['userID'] . '"></a></li>
		<li><a class="box-btn" href="createPostcard.php">ADD NEW</a></li> 
				</ul>
				';
	}
			else {
			echo '		<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="postcards.php">Postcards</a></li>
					<li><a href="events.php">Events</a></li> 
					<li><a href="login.php">Log in</a></li>
					<li><a class="box-btn" href="signUp.php">Sign up</a></li> 
				</ul>
				'; }?>
			</div>
		</div>
	</nav>

	<section id="home" class="page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
                </div>
				<div class="col-md-8">
					<article id="welcome">
						<h2 class="slogan">from Aarhus with love</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="slider-box">
    <div class="item active">
      <p id="welcome-text" class="first" >Create online postcard with your story from Aarhus. Share your
experience and give amazing and unique present to your friends. Check newest events in Aarhus. Meet local folks and learn new things about Danish culture from them. Enjoy your time in Aarhus!
</p>
    </div>

    <div class="item">
      <p id="welcome-text" class="second">Only here you can find most incredible stories from Aarhus. Check out now stories from people who visited Aarhus. Sign up to add postcard with your story. Share it with other users and your social network or keep them private as your travel diary. Join us today and get better experience from your travel to Aarhus!</p>
    </div>

    <div class="item">
      <p id="welcome-text" class="third">Do you want to spend great time in Aarhus and meet amazing local folks? Check out newest events. Sign up today and get incredible opportunity to get a company of local folks. Choose person who would you like to guide you from people participating in the event and get some new experience from your travel to Aarhus.</p>
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    
  </a>
</div>
					
		
					</article>
				</div>
				
			</div>
		</div>	
	</section>

<?php include_once('footer.php'); ?>