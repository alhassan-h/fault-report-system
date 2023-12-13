<?php
// Assuming you have a user authentication mechanism
// Here, we'll simulate a user session with a session variable
session_start();

// Check if the user is authenticated, redirect to login if not
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the submitted fault report
    $category = $_POST["category"];
    $description = $_POST["description"];
    $location = $_POST["location"];

    // In a real-world scenario, you would save the fault report to a database
    // For simplicity, we'll just print the details
    echo "<h2>Fault Report Submitted</h2>";
    echo "<p><strong>Category:</strong> $category</p>";
    echo "<p><strong>Description:</strong> $description</p>";
    echo "<p><strong>Location:</strong> $location</p>";
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
            width: 70%;
            margin: 0 auto;
        }

        h1 {
            color: #4CAF50;
        }

        form {
            width: 50%;
            margin: 0 auto;
            text-align: left;
        }

        input,
        textarea,
        select {
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
    </style>
    <title>Report Fault - AEDC Fault Reporting System</title>
</head>
<body>

<div class="container">
	<img src="abuja.jpg" alt="Image" style="display: block; margin: 0 auto;">
    <h1>Report a Fault</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="power_outage">Power Outage</option>
            <option value="faulty_meter">Faulty Meter</option>
            <option value="electric_shock">Electric Shock</option>
            <!-- Add more options as needed -->
        </select>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <input type="submit" value="Submit Report" class="btn">
    </form>

    <p>Go back to <a href="user_dashboard.php">Your Dashboard</a></p>
</div>
		<footer>
		<h5 style="text-align: center;">&copy;2023 Abuja Electricity Development Company. All rights reserved.</h5>
		</footer>
</body>
</html>
