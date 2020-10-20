<!DOCTYPE html>
<html lang="en">

<head>
    <title>Step 2: Complete your payment</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
    </script>
  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="index.html">
              <img src="images/PortaFuelBlue.png" width="30%">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="bookingform.php" class="nav-link">Order</a></li>
                  <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
                   <!-- LINK TO LOG IN <li class="nav-item"><a href="blog.html" class="nav-link">Login</a></li> -->

              </ul>
            </div>
          </div>
        </nav>
        <!-- END nav -->

         <section class="home-slider owl-carousel ftco-degree-bg">
          <div class="slider-item bread-wrap" style="background-image: url('images/background.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-10 col-sm-12 mb-4 text-center">


    <?php
                    
        $connect = mysqli_connect("localhost", "B00730256", "xnZH6Aba")
                    or die("Could Not Connect: ") . mysqli_error($connect);

        mysqli_select_db($connect, 'B00730256')
                    or die("Database will not open");
                    
        $coords = $_COOKIE['coords'];
    //EMAIL SENDING            
        $name = $_POST['fueltype'];
        $name = $_POST['name'];
        $email_from = $_POST['email'];
        $deliveryaddress = $_POST['deliveryaddress'];
        $deliverydate = $_POST['deliverydate'];
        $deliverytime = $_POST['deliverytime'];
        $fueltype = $_POST['fueltype'];
      
        $email_to = "aportafuel@gmail.com, $email_from";
        $email_subject = "New Booking Request";
        $email_message = "Order Details Below.\n\n";
    
        $checkdate="SELECT PFBookingID FROM portafuelbookings WHERE PFDelDate='$deliverydate'";
        
        $result= mysqli_query($connect, $checkdate); 
        $num = mysqli_affected_rows($connect);
                    
        if($num<=5){

        if(isset($_POST['email'])) {



            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }

            $email_message = '<html><body>';
            $email_message .= '<h1 style="color: #005ab3; " >New Portafuel Booking</h1>';
            $email_message .= '<h2 style="color: #005ab3; " >Details Below:</h2>';
            $email_message .= '<table rules="all" style="border-color: #005ab3; " cellpadding="10">';
            $email_message .= "<tr style='background: #0080ff; color:white; font-weight:bold;'><td><strong>Name:</strong> </td><td>".clean_string($name)."</td></tr>";
            $email_message .= "<tr style='color:black;'><td>Email: </td><td>".clean_string($email_from)."</td></tr>";
            $email_message .= "<tr style='color:black;'><td>Delivery Address: </td><td>".clean_string($deliveryaddress)."</td></tr>";
            $email_message .= "<tr style='color:black;'><td>Delivery Date: </td><td>".clean_string($deliverydate)."</td></tr>";
            $email_message .= "<tr style='color:black;'><td>Delivery Time: </td><td>".clean_string($deliverytime)."</td></tr>";
            $email_message .= "<tr style='color:black;'> <td>Fuel Type: </td><td>".clean_string($fueltype)."</td></tr>";

            $email_message .= "</table>";
            $email_message .= "</body></html>";// create email headers

            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            mail($email_to, $email_subject, $email_message, $headers);  
            }
             ?>

              <?php
        //SENDING TO DATABASE

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


            $row_query = mysqli_query($connect, "SELECT * FROM portafuelbookings");

            $num_rows = mysqli_num_rows($row_query);

            $BookingID = ($num_rows) + 1;

                        $insert = "INSERT INTO portafuelbookings (PFBookingID, PFCustName, PFCustEmail, PFDelAddress, PFCoords, PFDelDate, PFDelTime, PFFuelType) VALUES ('$BookingID', '$name', '$email_from' , '$deliveryaddress' , '$coords' , '$deliverydate ' , '$deliverytime' , '$fueltype')"; 


                            if(mysqli_query($connect, $insert)){

                                echo "<p style='color:green;'>Booking added Successfully</p>";
                            }
                            else{
                                echo "Error: " . $insert . "<br />" . mysqli_error($connect);
                            }
        }
                   
                    else{
                        echo"<script type='text/javascript'>alert('Sorry! We're fully booked that day. Please try again.);window.location='bookingform.php';
                        </script>";
                    }
                            mysqli_close($connect);
            ?>           

<div><p><b>Step 2: Complete your payment.</b></p><br>
                    
<?php if($fueltype == "petrol") : ?>
   
                <p>Pay for Your <b>Petrol</b> here:</p><br>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="col-sm-6 offset-sm-4 text-center">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="WV2TL6J3DQ94S">
    <table>
    <tr><td><input  type="hidden" name="on0" value="Petrol (prices include £5 delivery fee)">Petrol (prices include £5 delivery fee)</td></tr><tr><td><select name="os0">
        <option value="test">test £0.01 GBP</option>
        <option value="10 litres">10 litres £18.00 GBP</option>
        <option value="15 litres">15 litres £23.00 GBP</option>
        <option value="20 litres">20 litres £29.00 GBP</option>
        <option value="25 litres">25 litres £35.00 GBP</option>
        <option value="30 litres">30 litres £41.00 GBP</option>
        <option value="35 litres">35 litres £47.00 GBP</option>
        <option value="40 litres">40 litres £53.00 GBP</option>
        <option value="45 litres">45 litres £59.00 GBP</option>
        <option value="50 litres">50 litres £65.00 GBP</option>
    </select> </td></tr>
    </table>
    <div class="col-md-6 offset-sm-1 text-center">
    <input type="hidden" name="currency_code" value="GBP">
    <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
    </div>
    </form>

                        
<?php else : ?>
    <div><p>Pay for Your <b>Diesel</b> here:</p><br>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="col-md-6 offset-sm-4 text-center">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="RJFPDVNVJWZDJ">
    <table>
    <tr><td><input class="text-center" type="hidden" name="on0" value="Diesel (prices include £5 delivery fee)">Diesel (prices include £5 delivery fee)</td></tr><tr><td><select name="os0">
        <option value="test">test £0.01 GBP</option>
        <option value="10 litres">10 litres £19.00 GBP</option>
        <option value="15  litres">15  litres £24.00 GBP</option>
        <option value="20 litres">20 litres £30.00 GBP</option>
        <option value="25 litres">25 litres £36.00 GBP</option>
        <option value="30 litres">30 litres £42.00 GBP</option>
        <option value="35 litres">35 litres £48.00 GBP</option>
        <option value="40 litres">40 litres £54.00 GBP</option>
        <option value="45 litres">45 litres £60.00 GBP</option>
        <option value="50 litres">50 litres £66.00 GBP</option>
    </select> </td></tr>
    </table>
        <div class="col-md-6 offset-sm-1 text-center">
    <input type="hidden" name="currency_code" value="GBP">
    <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
            </div>
    </form>




                </div>
<?php endif; ?>

                  </div> 
                    
              </div>
            </div>
          </div>
             </div>
        </section>
     <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
    </body>
</html>