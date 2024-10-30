<?php
$mysqli = new mysqli("studentdb-maria.gl.umbc.edu","danieln3","danieln3","danieln3");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT lot_id, spot_id, avail
FROM parking_spot WHERE lot_id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($lot_id, $spot_id, $avail);
echo "<table>";
    echo "<tr>";
    echo "<th>Spot ID</th>";
    echo "<th>Availability</th>";
    echo "</tr>";

    // Loop through the results and display each row in the table
    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $spot_id . "</td>";
        echo "<td>" . $avail . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    $stmt->close();
?>
