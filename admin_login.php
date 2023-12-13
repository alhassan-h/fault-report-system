<?php

include_once 'connection.php';


if ( isset($_SESSION['loggedInUser']) ) {
	header('location: admin_dashboard.php');exit;
}
	
if ( isset($_POST['action']) AND $_POST['action'] === 'login' ) {

	$username = $dbc->real_escape_string( $_POST['username'] );
	$password = $dbc->real_escape_string( $_POST['password'] );

	$sql = "SELECT `username`,`password`
	FROM `user`
	WHERE `username`='$username' AND `password`='$password'";

	$query = $dbc->query( $sql );

	if ( $dbc->affected_rows > 0 ){
		session_start();
		$_SESSION['loggedInUser'] = $username;
		header('location: admin_dashboard.php');exit;
	}
	else{
		$msg = "Incorrect username or password!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
            text-align: left;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
    <title>Admin Login - AEDC Fault Reporting System</title>
</head>
<body>

<div class="container">
	<img src="abuja.jpg" alt="Image" style="display: block; margin: 0 auto;">
    <h1>Admin Login to Fault Reporting System</h1>

    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="admin_username">Admin Username:</label>
        <input type="text" id="admin_username" name="admin_username" required>

        <label for="admin_password">Admin Password:</label>
        <input type="password" id="admin_password" name="admin_password" required>

        <input type="submit" value="Login" class="btn">
    </form>

    <p>Go back to <a href="index.php">Homepage</a></p>
</div>
<footer>
		<h5 style="text-align: center;">&copy;2023 Abuja Electricity Development Company. All rights reserved.</h5>
		</footer>
</body>
</html>
