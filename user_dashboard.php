<?php
// Assuming you have a user authentication mechanism
// Here, we'll simulate a user session with a session variable
session_start();

// Check if the user is authenticated, redirect to login if not
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Simulate fetching user data from a database
// In a real application, you would query your database based on the user ID
$user_id = $_SESSION["user_id"];
$user_data = [
    "username" => "demo_user",
    "email" => "demo_user@example.com",
    // Add more user-specific data as needed
];
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
            width: 70%;
            margin: 0 auto;
        }

        h1 {
            color: #4CAF50;
        }

        p {
            line-height: 1.6;
        }
    </style>
    <title>User Dashboard - AEDC Fault Reporting System</title>
</head>
<body>

<div class="container">
	<img src="abuja.jpg" alt="Image" style="display: block; margin: 0 auto;">
    <h1>Welcome to Your Dashboard, <?php echo $user_data["username"]; ?>!</h1>

    <p>This is your personalized dashboard where you can view and manage your fault reports, update your profile, and more.</p>

    <h2>Your Profile</h2>
    <p><strong>Username:</strong> <?php echo $user_data["username"]; ?></p>
    <p><strong>Email:</strong> <?php echo $user_data["email"]; ?></p>
    <!-- Add more user-specific details as needed -->

    <h2>Your Fault Reports</h2>
    <p>You can view a list of your submitted fault reports and their statuses here.</p>
    <!-- Add a dynamic list of fault reports here -->

    <h2>Submit a New Fault Report</h2>
    <p>Use the <a href="report_fault.php">Fault Reporting Form</a> to submit a new fault report.</p>

    <p>Go back to <a href="index.php">Homepage</a></p>
</div>
<footer>
		<h5 style="text-align: center;">&copy;2023 Abuja Electricity Development Company. All rights reserved.</h5>
		</footer>
</body>
</html>
