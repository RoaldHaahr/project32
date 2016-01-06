<?php
	$page='myprofile';
?>

<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

<?php
	include_once('connection.php');

	$sql = "SELECT * FROM users WHERE ID = " . $_SESSION['userID'];

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
	} catch (PDOException $e) {
		echo "Server error - try again!<br>" . $e->getMessage();
	}

	$_SESSION['role'] = $row['role'];

	$profilePicture = '<img src="showProfilePicture.php?ID=' . $_SESSION['userID'] . '" class="profile-picture">';
?>

	<section class="page" id="loggedin-user-profile-page">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"><?php echo $row['name']; ?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php
							echo $profilePicture;
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="user-role">-<?php echo $row['role']; ?>-</h4>
						<p id="user-description">
							<?php echo $row['description']; ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="user-information">
						<p>
							<strong>E-mail: </strong><?php echo $row['email'];  ?>
						</p>
						<p>
							<strong>Nationality: </strong><?php echo $row['country']; ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a class="link-button red-link" id="edit-link" href="signUpCompletion.php">EDIT</a>
					</div>
				</div>

			</div>

	</section>

<?php include_once('footer.php'); ?>