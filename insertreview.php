<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
  
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
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="bookingform.html" class="nav-link">Order</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Login</a></li>
            
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
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              


                
                
                <h1>Thank you for Your feedback, it's been successfully submitted!</h1><br>
                <p>Your feedback is very important to Portafuel and we consider every feedback we receive. Our goal is to improve our service any way we can, and we appreciate You taking the time to complete the rating.<br><br>
                
                 
        <?php

$conn = mysqli_connect("localhost", "B00737995", "R749MRuT")
    or die("Could not connect: " . mysqli_error($conn));


mysqli_select_db($conn , 'B00737995') or die ('db will not open' ); 


//adding values from a form
$name = $_POST["name"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];



$query ="INSERT INTO customerreview VALUES('" . $name . "', '" . $rating . "',  '" . $comment . "')";

mysqli_query($conn, $query) or die('Invalid query');




echo "<b>Customer rating has been saved as following:</b><br>"; 
echo "Submitted by: $name <br>";
echo "Your rating (1-5): <b>$rating</b> <br>";
echo "Your feedback: $comment <br>";
mysqli_close($conn);
?>
                
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


















