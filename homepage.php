<!DOCTYPE html>
<html lang="en">

<head>
        <title>UMBC Parking</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="project.css" />
</head>

<div class="header">
<img src="https://tse2.mm.bing.net/th?id=OIP.9X3PMBIasTG_lJEwcLf8QQHaHa&pid=Api&P=0&h=220"
alt="This is an image of the UMBC logo" style="width:100px;height:80px;">
<h5> UMBC Parking <h5/>
</div>

<body>
        <div class="Border">
                <h1>Available Parking Preview<h1>

                <?php
        $db = mysqli_connect("studentdb-maria.gl.umbc.edu","ssingh14","ssingh14","ssingh14");

        if (mysqli_connect_errno())     exit("Error - could not connect to MySQL");
        $new_query = "SELECT * FROM lots";

        $result = mysqli_query($db, $new_query);
        ?>
                <table border="1">
                        <tr>
                                <th> Lot ID </th>
                                <th> Total Spots </th>

                        </tr>
        <?php
        while($row_array = mysqli_fetch_array($result))
                {
        ?>
                <tr>
        <td><?php echo $row_array['lot_id']; ?></td>
        <td><?php echo $row_array['total_spots']; ?></td>

        </tr>


                <?php
                }

                ?>
</table>
        </div>
        <table>
		<tr>
                <td><div class="Border">
                        <h5><a href="reservation.html">Reserve Parking</a><h5>
                </div>
                </td>
                <td><div class="Border">
                        <h5><a href="availability.php">Parking Availability</a><h5>
                </div>
                </td>
                <td><div class="Border">
                        <h5><a href="report.html">Parking Report</a><h5>
                </div>
                </td>
        </tr>

</body>
</html>
