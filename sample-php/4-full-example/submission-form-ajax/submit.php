<?php

if( $_POST ){

    $sid = $_POST['txt_studentid'];
    $fname = $_POST['txt_fname'];
    $lname = $_POST['txt_lname'];
    $fgrade = $_POST['txt_fgrade'];
	
    // NEED TO ADD OUR CONNECTION STRING INFORMATION
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // SQL QUERY HERE
    $sql = "INSERT INTO `table` (columns)
    VALUES ('values')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class=\"alert alert-info\"><strong>Success!</strong> The form submitted and data was stored...</div>";
    } else {
        echo  "<div class=\"alert alert-danger\"><strong>Error!</strong> " . "<br>" . $sql . "<br>" . mysqli_error($conn) . "</div>";     
    }

    $conn->close();
?>

    <!-- DISPLAY TABLE OUTPUT HERE -->


<?php
}
?>