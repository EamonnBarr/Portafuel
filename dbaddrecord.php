<?php
$inputpassword=$_POST["inputPass"];
$inputusername=$_POST["inputUser"];
$inputemail=$_POST["inputEmail"];
$inputfueltype=$_POST["inputFuel"];
/*#########################*/

$conn = mysqli_connect("localhost", "B00712667", "LLtkdjd4") 
or die("Could not connect: " . mysqli_error($conn));
print "Successful Connection<br/>";

mysqli_select_db($conn, 'B00712667') or die ('db will not open');
print "Database Connected";



//accesses e-mail from registration and assigns to variable
	$registerEmail=$_POST["registerEmail"];
	//accesses name from registration and assigns to variable
	$registerName=$_POST["registerName"];
	//accesses password from registration and assigns to variable
	$registerPassword=$_POST["registerPassword"];
//accesses fueltype from registration and assigns to variable
	$registerFuel=$_POST["registerFuel"];


$sql = "INSERT INTO Members (dbusername, dbpassword, email, fueltype)
 VALUES ('$registerName', '$registerPassword', '$registerEmail','$registerFuel')";
 
if (mysqli_query($conn, $sql)) { //if connection and record creation is successful...
		header ("Location: login.php");
	} else { //otherwise...
		header ("Location: Error.php");
	}

include("dbconnectclose.php");
?>
