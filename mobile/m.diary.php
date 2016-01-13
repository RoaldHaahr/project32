<!DOCTYPE html>
<html>
	<?php include 'm.head.php'; ?>

	<body>

		<header>
			
				<a href="" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>
				<button class="addBtn" onclick="window.location.assign('m.addPostcard.php')"><img src="img/plus.png" alt="" class="plus"></button>
				
		</header>

		<div class="container">

			<div class="row">
				<div class="col-xs-12">
					
					<form role="search" id="search">
				        <div class="form-group">
				            <input type="text" class="form-control" id="search" placeholder="Search">
				        </div>
				    </form>
				
				</div>
			</div>

			<?php include 'getYourPostcards.php'; ?>


		</div>
		
   

    <footer>
    	<div class="row">
    		<div class="col-xs-3">
    			<input type="button" value="Events" class="eventBtn" onclick="window.location.assign('m.events.php')">
    		</div>
		
    		<div class="col-xs-3">
    			<input type="button" value="Postcards" class="postcardsBtn" onclick="window.location.assign('m.postcards.php')">
			</div>

    		<div class="col-xs-3">
    			<div class="active">
    				<input type="button" value="Diary" class="diaryBtn" onclick="window.location.assign('m.Diary.php')">
    			</div>
    		</div>

    		<div class="col-xs-3">
    			<input type="button" value="Profile" class="profileBtn" onclick="window.location.assign('m.yourProfile.php')">
    		</div>
    	</div>
    
    </footer>


	</body>

</html>