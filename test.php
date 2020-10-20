<?php

$connect = mysqli_connect("localhost", "B00730256", "xnZH6Aba")
                or die("Could Not Connect: ") . mysqli_error($connect);

                mysqli_select_db($connect, 'B00730256')
                    or die("Database will not open");
    
    $name = $_POST["name"];
    $email_from = $_POST["email"];
    $deliveryaddress = $_POST["deliveryaddress"];
    $deliverydate = $_POST["deliverydate"];
    $deliverytime = $_POST["deliverytime"];
    $fueltype = $_POST["fueltype"];
    $deliveryamount = $_POST["fuelamount"];
 
    $row_query = mysqli_query($connect, "SELECT * FROM portafuelbookings");

    $num_rows = mysqli_num_rows($row_query);

    $BookingID = ($num_rows) + 1;
    
    $insert = "INSERT INTO portafuelbookings (PFBookingID, PFCustName, PFCustEmail, PFDelAddress, PFDelDate, PFDelTime, PFFuelType, PFFuelAmount) VALUES ('$BookingID', '$name', '$email_from' , '$deliveryaddress', '$deliverydate ' , '$deliverytime', '$fueltype', '$deliveryamount')"; 

    
    if(mysqli_query($connect, $insert)){
        
        echo "Booking added Successfully";
    }
    else{
        echo "Error: " . $insert . "<br />" . mysqli_error($connect);
    }

    mysqli_close($connect);
    
    
    
?>
