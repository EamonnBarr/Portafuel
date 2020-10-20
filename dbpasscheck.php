<?php
$inputpassword=$_POST["inputPass"];
$inputusername=$_POST["inputUser"];
/*#########################*/

$conn = mysqli_connect("localhost", "B00712667", "LLtkdjd4") 
or die("Could not connect: " . mysqli_error($conn));
print "Successful Connection<br/>";

mysqli_select_db($conn, 'B00712667') or die ('db will not open');
print "Database Connected";



$sql = "SELECT userid, dbusername, dbpassword FROM Members WHERE dbusername='$inputusername'";
$result = mysqli_query($conn, $sql);

/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
*/

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userid: " . $row["userid"]. " - Name: " . $row["dbusername"]. " " . $row["dbpassword"]. "<br>";
	$id=$row["userid"];
	$recusername=$row["dbusername"];
	$recpassword=$row["dbpassword"];
    }
} else {
    echo "0 results";
}


  

/*#########################*/


if($inputpassword==$recpassword) {
$value = 'eamonnOK';
setcookie("passCookie", $value);
header ("Location: index.php?rowid=$id");
}
else {
header ("Location: login.php");
}

mysql_close($con);
?>
