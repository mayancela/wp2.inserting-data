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
    $sql = "INSERT INTO `table 3` (`Food Name`, `Scientific Name`, `Group`, `Sub Group`)
    VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[Age]','$_POST[Hometown]')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
