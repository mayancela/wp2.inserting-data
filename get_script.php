<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
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
    $sql="SELECT * FROM `table 3` ";
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
