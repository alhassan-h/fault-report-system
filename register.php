<?php

include_once 'connection.php';


if ( isset($_SESSION['loggedInUser']) ) {
	header('location: user_dashboard.php');exit;
}
	
if ( isset($_POST['action']) AND $_POST['action'] === 'register' ) {

	$name = $dbc->real_escape_string( $_POST['name'] );
	$username = $dbc->real_escape_string( $_POST['username'] );
	$email = $dbc->real_escape_string( $_POST['email'] );
	$password = $dbc->real_escape_string( $_POST['password'] );

	$sql = "INSERT INTO `user`(`name`,`username`,`email`,`password`)
	VALUES('$name','$username','$email','$password')";

	$query = $dbc->query( $sql );

	if ( $dbc->affected_rows > 0 ){
		header('location: login.php');exit;
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
    <title>Register - AEDC Fault Reporting System</title>
</head>
<body>

<div class="container">
	<img src="abuja.jpg" alt="Image" style="display: block; margin: 0 auto;">
    <h1>Register for Fault Reporting System</h1>

    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name in Full:</label>
        <input type="text" id="name" name="name" required>
		
		<label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
		
		<label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Register" class="btn">
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
	<p>Go Back to Home Page <a href="index.php">Home Page</a></p>
</div>
<footer>
		<h5 style="text-align: center;">&copy;2023 Abuja Electricity Development Company. All rights reserved.</h5>
		</footer>
</body>
</html>
