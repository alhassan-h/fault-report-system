<?php

}

// Simulate fetching fault reports (replace with actual database queries)
$fault_reports = [
    ["id" => 1, "category" => "Power Outage", "description" => "No electricity in area A", "location" => "Cityville"],
    ["id" => 2, "category" => "Faulty Meter", "description" => "Meter in house B is not working", "location" => "Townsville"],
    // Add more simulated fault reports
];

// Simulate report analytics data (replace with actual analytics data)
$report_analytics = [
    "total_reports" => count($fault_reports),
    "power_outage" => 5, // Simulated number of power outage reports
    "faulty_meter" => 3, // Simulated number of faulty meter reports
    // Add more analytics data as needed
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <title>Admin Dashboard - AEDC Fault Reporting System</title>
</head>
<body>

<div class="container">
	<img src="abuja.jpg" alt="Image" style="display: block; margin: 0 auto;">
    <h1>Welcome to the Admin Dashboard, <?php echo $_SESSION["admin_username"]; ?>!</h1>

    <h2>Fault Reports</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Description</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($fault_reports as $report): ?>
            <tr>
                <td><?php echo $report["id"]; ?></td>
                <td><?php echo $report["category"]; ?></td>
                <td><?php echo $report["description"]; ?></td>
                <td><?php echo $report["location"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Report Analytics</h2>
    <p>Total Reports: <?php echo $report_analytics["total_reports"]; ?></p>
    <p>Power Outage Reports: <?php echo $report_analytics["power_outage"]; ?></p>
    <p>Faulty Meter Reports: <?php echo $report_analytics["faulty_meter"]; ?></p>
    <!-- Add more analytics data as needed -->

    <!-- Placeholder for data visualization (replace with actual charts) -->
    <h2>Data Visualization</h2>
    <p>Include your data visualization charts here using JavaScript libraries like Chart.js or D3.js.</p>

    <p>Go back to <a href="admin_login.php">Admin Login</a></p>
</div>

</body>
</html>
