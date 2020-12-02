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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MEDIA PRODUCTION II</a>
        </div>
      </div>
    </nav>
    <h2> Insert Some Data</h2>
    <?php
        $servername = "localhost:3308";
        $username = "dev11dbuser";
        $password = "FM11web2020";
        $dbname = "dev11db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // replace sql commands with your own table name and columns + $_POSt ID
        $sql = "INSERT INTO `table 4` (`Food Name`, `Scientific Name`, `Group`, `Sub Group`)
        VALUES ('$_POST[FoodName]','$_POST[ScientificName]','$_POST[Group]','$_POST[SubGroup]')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
    <p> Check out new table <a href="table-update.html"> here </a> </p>
</body>
</html>
