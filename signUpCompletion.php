<?php $page = 'completeprofile'; ?>
<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>
<?php
	include_once('connection.php');

?>
	<section class="page" id="signup-completion-page">
		
		<?php
			include_once('connection.php');

			session_start();

			$sql = "SELECT * FROM users WHERE ID = " . $_SESSION['userID'] . ";";

			try {
				$st = $conn->prepare($sql);
				$st->execute();
				$row = $st->fetch();
			} catch (PDOException $e) {
				echo "Server error - try again!<br>" . $e->getMessage();
			}

            $name = $row['name'];
            $tourist = "";
            $local = "";

            if($row["role"] == 'tourist'){
                $tourist = 'checked = "checked"';
            } else{
                $local = 'checked = "checked"';
            }
        ?>

		<form id="signup-completion-form" action="updateUser.php" method="post" enctype="multipart/form-data">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Complete your profile</h2>
					</div>
				</div>
				 <div class="row">
                    <div class="col-md-1">
                        <p>Name: </p>
                    </div>
                    <div class="col-md-11">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" >
                    </div>
                </div>
				<div class="row">
					<div class="col-md-6">
						<p class="role-radio" id="tourist-radio">
							<input type="radio" name="role" value="Tourist" <?php echo $tourist; ?>>I'm a tourist
						</p>
					</div>
					<div class="col-md-6">
						<p class="role-radio" id="local-radio">
							<input type="radio" name="role" value="Local" <?php echo $local; ?>>I'm a local
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<figure id="signup-profile-picture"><img src="showImageProfile.php?ID=<?php echo $row['ID']; ?>" alt="Profile picture"></figure>

					</div>
					<div class="col-md-4">
						<label for="user-picture">

							Upload your profile picture

						</label>

						<div id="user-picture-btn"><p id="choose-picture"><font color="white"> Choose picture</font><input id="user-picture-upload" type="file" name="image" value="Choose picture"></p></div>

					</div>

					<div class="col-md-5">
						<div id="nationality-and-description">
							<select name="user-nationality">

								<option selected disabled>Your nationality</option>
								<?php include_once('getCountries.php'); 
								echo "<option value='" . $row["country"] . "' selected='selected'>" . $row["country"] . "</option>";
								?>

							</select><br>
							<textarea name="user-description" placeholder="Write a short description"><?php echo $row['description']; ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="submit" value="SAVE">
					</div>
				</div>

			</div>
		</form>

	</section>

<?php include_once('footer.php'); ?>