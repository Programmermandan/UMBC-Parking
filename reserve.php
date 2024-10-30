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

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data

    $lot_id = $_POST["LOT"];
    $spot_id = $_POST["Spot"];
    $start_time = $_POST["start"];
    $end_time = $_POST["end"];

    // Check if the spot is available
    $check_query = "SELECT * FROM parking_spot WHERE lot_id = '$lot_id' AND spot_id = '$spot_id' AND avail = 'yes'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Spot is available, reserve it
        $reserve_query = "UPDATE parking_spot SET avail= 'no' WHERE lot_id = '$lot_id' AND spot_id = '$spot_id'";
        if ($conn->query($reserve_query) === TRUE) {
            echo "Spot reserved successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Spot is already reserved
        echo "Sorry, this spot is already reserved. Please choose another spot.";
    }
}

// Close the database connection
$conn->close();
?>
</body>
</html>
