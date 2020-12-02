<!DOCTYPE html>
<html>
<head>
    <title> Inserting Data </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    //$q = intval($_GET['q']);

    $con = mysqli_connect('localhost:3308','dev11dbuser','FM11web2020','dev11db');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    // replace mysql queries with your own data table name + columns

    echo "<table class='center'>
    <tr>
    <th><strong> Food Name </strong></th>
    <th><strong> Scientific Name </strong></th>
    <th><strong> Group </strong></th>
    <th><strong> Sub Group </strong></th>
    </tr>";
    mysqli_select_db($con,"dev11db");
    $sql="SELECT * FROM `table 4` ";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FOOD NAME'] . "</td>";
        echo "<td>" . $row['SCIENTIFIC NAME'] . "</td>";
        echo "<td>" . $row['GROUP'] . "</td>";
        echo "<td>" . $row['SUB GROUP'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>
</body>
</html>
