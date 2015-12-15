<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="uft-8">
		<title>List database content</title>
	</head>

	<body>
		
		<?php

			$sql = "SELECT * FROM postcards";
			$rows=$conn->query($sql);

			foreach ($rows as $row) {
				echo '<p>Upload by person: '.$row["title"].'</p>';
				echo '<p><img src="showImage.php?' . $row['ID'] . '"></p>';
			}

			$conn=null;
		?>
		
	</body>

</html>