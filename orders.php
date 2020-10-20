
<?php

include "session.php";

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Book Fuel</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    
    .orders
    {
        width:100%;
        border-collapse:collapse;
        border-radius:1em;
        overflow:hidden;
        margin: 0 auto;
        padding: 0 auto;
        text-align: center;
        float:clear;
        table-layout:auto;
        color:grey;
        font-size:16px;
    }
.home-main{
			background: #78d5ef;
			color:#fff;
			padding: 5%;
			text-align: center;
		}
		.blinker{
			animation: blinker 1.5s linear infinite;
		}
		@keyframes blinker {
		  50% {
			opacity: 0;
		  }
		}
		.home-main button{
			background: #fff;
			color: black;
			border-radius: 0;
			font-weight: 700;
			width: 16%;
			height: 50px;
			top: 4%;
			margin-top: 3%;
		}
		.home-main button:hover{
			transition: 1s ease;
			color:#78d5ef;
			width: 19%;
		}
		.content1-left{
			padding:9%;
		}
		.content1-right{
			padding:9%;
			background:#e4e4e4;
		}
		.home-content2{
            color:white;
            width:100%;
            margin:auto;
			background: #adb5bd;
			padding: 1.4%;
			text-align: center;	
		}
		.home-content2 p{
			font-size: 18px;
			line-height: 50px;
		}
		.home-content2 p span{
			font-weight: 500;
		}
       a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}
    table
    {
        padding:20px;
                    width:100%;
    }
</style>
    </head>
    <body>
<div class="container-fluid home-main">
		<h2>Welcome Portafuel Admin<span class="blinker">.</span></h2>
            <button type="button" class="btn btn-default"><a href="logout.php" class="text-dark">Log Out</a></button>
</div>
	<div class="container-fluid home-content2">
    <br /><br />
    
        
        <?php
        $conn = mysqli_connect("localhost", "B00730256", "xnZH6Aba")
                    or die("Could Not Connect: ") . mysqli_error($conn);

        mysqli_select_db($conn, 'B00730256')
                    or die("Database will not open");
        
        $date= date("Y-m-d");
        
        $query= "SELECT * FROM portafuelbookings WHERE DATE(PFDelDate) = DATE(NOW())";
        
        $result = mysqli_query($conn,$query)
                or die ("fail"); //sending the query to the database

        $num = mysqli_num_rows ($result); //getting the number of rows in the query result and storing it in a variable

        $col = mysqli_num_fields($result); //getting the number of columns in the query result and storing it in a variable

        echo "<h1>Today's Orders</h1><br />";
        echo "<table class='orders' border='1'>";
        
        echo "<th style='background: #fff;padding:8px;'>PFBookingID</th><th style='background: #fff;padding:8px;'>PFCustName</th><th style='background: #fff;padding:8px;'>PFCustEmail</th><th style='background: #fff;padding:8px;'>PFDelAddress</th><th style='background: #fff;padding:8px;'>PFCoords</th><th style='background: #fff;padding:8px;'>PFDelDate</th><th style='background: #fff;padding:8px;'>PFDelTime</th><th style='background: #fff;padding:8px;'>PFFuelType</th>"; //outputting the table headings


        for ($i=0; $i<$num; $i++) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j=0; $j<$col; $j++){
                echo "<td style='background: #fff;padding:8px;'>" . $row [$j] . "</td>";
                }
                    echo "</tr>";
        }
                echo "</table>"; // this loop outputs the data form the query and keeps looping and creating cols and rows based on the variable

        ?>
        <br /><br />

        <div class="container-fluid home-content2">
        <br /><br />
        
                <?php
        $conn = mysqli_connect("localhost", "B00730256", "xnZH6Aba")
                    or die("Could Not Connect: ") . mysqli_error($conn);

        mysqli_select_db($conn, 'B00730256')
                    or die("Database will not open");
        
        $date= date("Y-m-d");
        
        $query= "SELECT * FROM portafuelbookings ORDER BY PFBookingID DESC";
        
        $result = mysqli_query($conn,$query)
                or die ("fail"); //sending the query to the database

        $num = mysqli_num_rows ($result); //getting the number of rows in the query result and storing it in a variable

        $col = mysqli_num_fields($result); //getting the number of columns in the query result and storing it in a variable

        echo "<h1>Entire Order History</h1><br />";
        echo "<table class='orders' border='1'>";
        
        echo "<th style='background: #fff;padding:8px;'>PFBookingID</th><th style='background: #fff;padding:8px;'>PFCustName</th><th style='background: #fff;padding:8px;'>PFCustEmail</th><th style='background: #fff;padding:8px;'>PFDelAddress</th><th style='background: #fff;padding:8px;'>PFCoords</th><th style='background: #fff;padding:8px;'>PFDelDate</th><th style='background: #fff;padding:8px;'>PFDelTime</th><th style='background: #fff;padding:8px;'>PFFuelType</th>"; //outputting the table headings


        for ($i=0; $i<$num; $i++) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j=0; $j<$col; $j++){
                echo "<td style='background: #fff;padding:8px;'>" . $row [$j] . "</td>";
                }
                    echo "</tr>";
        }
                echo "</table>"; // this loop outputs the data form the query and keeps looping and creating cols and rows based on the variable

        ?>
        
        
        
       
        
        
        
        
        
        <?php
        
        mysqli_close($conn);
        
        ?>
        
        </div>
        </div>
        
    </body>
</html>
        
        
        
        
         
