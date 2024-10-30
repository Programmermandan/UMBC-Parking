<!DOCTYPE html>
<html lang="EN"><head>
        <title>Reporting...</title>
        <link rel="stylesheet" type="text/css" href="project.css" />
</head>
<body>
<?php

// Establish a database connection (Replace with your database credentials)

$servername = "studentdb-maria.gl.umbc.edu";
$username = "danieln3";
$password = "danieln3";
$dbname = "danieln3";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $spot_idd = $_POST['Spot_Number'];
    $lot_idd = $_POST['lot'];
    $reasons = $_POST['Reasoning'];

    $stmt = $db->prepare("INSERT INTO reports (spot_id, lot_id, reason) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $spot_idd, $lot_idd, $reasons);

    if ($stmt->execute()) {
        echo "Report submitted successfully! ";
		echo "A UMBC officer will be there shortely to assist you, if the officer doesn't arrive within 10 mins call us at (210)-987-7635";
    } else {
        echo "Error submitting report: " . $stmt->error;
    }

    $stmt->close();
}

	


// Close the database connection
$db->close();
 
?>
</body>
</html>
