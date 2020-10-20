<?php
$servername = "vbcmsq01";
$username = "BAR17123019";
$password = "18021998";
$dbname = "16_BAR17123019";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "DROP TABLE Members";

/*
Deletes the table and all its data.


*/
 
if (mysqli_query($conn, $sql)) {
    echo "Table Members dropped successfully";
} else {
    echo "Error dropping table: " . mysqli_error($conn);
}

include("dbconnectclose.php");
?>