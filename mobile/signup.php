<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>

	<div id="login">
    	<form method="post" enctype="multipart/form-data" action="addUser.php">
        	<p>
            	<label for="name">Name: </label>
                <input type="text" name="name">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email">
            </p>
            <p>
            	<label for="password">Password: </label>
                <input type="password" name="password">
            </p>
            <p>
                <label for="description">Description: </label>
                <textarea name="description"></textarea>
            </p>
            <p>
                <label for="image">Profile picture: </label>
                <input type="file" name="image" accept="image/*">
            </p>
            <p>
                <input type="checkbox" name="role" value="traveler">I'm a traveller<br>
                <input type="checkbox" name="role" value="local">I'm a local
            </p>
            <p>
                <label for="country">Country: </label>
                <select name="country" placeholder="Yor nationality">
                    <?php include_once('getCountries.php'); ?>
                </select>
            </p>
            <p>
            	<input type="submit" value="Sign Up">
            </p>
        </form>
    </div>

</body>
</html>