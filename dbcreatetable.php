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
$sql = "CREATE TABLE Members (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
dbusername VARCHAR(30) NOT NULL,
dbpassword VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Members created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>