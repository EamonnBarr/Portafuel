<?php 
error_reporting(0);
if(isset($_COOKIE['passCookie'])) {
$userid=$_GET["rowid"];}

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to PortaFuel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">    
    <link rel="stylesheet" href="css/style.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $(".ftco-section-2").hide();
  });
  $("#btn2").click(function(){
    $(".ftco-section-2").show();
  });
});
</script>
      
      
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/PortaFuelBlue.png" width="30%">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="bookingform.php?rowid=<?php echo$userid;?>" class="nav-link">Order</a></li>
              <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
               <!-- LINK TO LOG IN <li class="nav-item"><a href="blog.html" class="nav-link">Login</a></li> -->
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel ftco-degree-bg">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay" style="background-image: url('images/car-refueling.png'); background-repeat: no-repeat;
  background-size:  cover;;"></div>
        <div class="container">
            <br /><br /><br />
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
              <h1 class="mb-4">I Need 
                <strong class="typewrite" data-period="5000" data-type='[ "To Refuel.", "Peace of Mind.", "PortaFuel." ]'>
                  <span class="wrap"></span>
                </strong>
              </h1>
              <p></p>
              <p><a href="bookingform.php" class="btn btn-primary btn-outline-white px-4 py-3"> Order Now!</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>PortaFuel provides a simple 4 step fuel delivery platform!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center"><img src="images/Empty%20Fuel.png" width="90%"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Run out of Fuel</h3>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center"><img src="images/Map.png" width="75%"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Place an Order</h3>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-4"><span class="align-self-center"><img src="images/lorry.png" width="75%"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Sit Tight and Relax</h3>
                <p></p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center"><img src="images/Full%20Fuel.png" width="90%"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Continue on your Journey</h3>
                <p></p>
              </div>
            </div>      
          </div>
        </div>
           <div class="col-md-7 text-center heading-section ftco-animate">
            
          

               </div>
          
          
      </div>
    </section>
    
    <section class="ftco-section-parallax ftco-degree-bg">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
             <h2 class="h1 font-weight-bold">Customer Satisfaction Rating:</h2>
                
                         <?php

$conn = mysqli_connect("localhost", "B00737995", "R749MRuT")
    or die("Could not connect: " . mysqli_error($conn));


mysqli_select_db($conn , 'B00737995') or die ('db will not open' ); 


$query ="SELECT ROUND(avg(rating) ,1) FROM `review`";

$result = mysqli_query($conn, $query) or die("Invalid query");
$num = mysqli_num_rows($result);

for($i=0; $i<$num; $i++)
{
    $row = mysqli_fetch_row($result);
echo "<p style=text-aligm:center;font-size:30pt;color:#ffffff;><b>" . $row[0] . " / 5" . "</b></p>";
}
echo "</table>";
mysqli_close($conn);

?>
                
                             
<button id="btn2" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">More Customer Feedback</button>
 <button id="btn1" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">Hide</button>               
                
         
            </div>
          </div>
        </div>
      </div>
    </section>

                     
      
      
      <section style="display:none;" class="ftco-section-2 ftco-degree-bg">
      <div class="container d-flex">
        
          <div class="img-fluid col-sm-12 col-lg-5 order-last" style="background-image: url('images/people.jpg');">
          </div>
          <div class="text col-lg-7 order-first ftco-animate">
              <h3 class="heading">Your feedback matters!</h3>
              <h2 class="h1 font-weight-bold">Previous customer reviews...</h2>
                
                         <?php

$conn = mysqli_connect("localhost", "B00737995", "R749MRuT")
    or die("Could not connect: " . mysqli_error($conn));


mysqli_select_db($conn , 'B00737995') or die ('db will not open' ); 


$query ="SELECT name, comment FROM `customerreview`";

$result = mysqli_query($conn, $query) or die("Invalid query");
$num = mysqli_num_rows($result);

for($i=0; $i<$num; $i++)
{
    $row = mysqli_fetch_row($result);

    echo "<p style=text-aligm:center;font-size:20pt;color:#4d5563;>" . $row[0] . " said: <i>" . $row[1] . "</i></p>";
}
echo "</table>";
mysqli_close($conn);

?>
            </div>
          </div>
        
     
    </section>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
      
    <section class="ftco-section-parallax ftco-degree-bg">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
             <h2 class="h1 font-weight-bold">Sign up now to make your Orders Even Faster!</h2>
                
              <p><a href="login.php" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">Signup/Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>


        <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
         <div class="col-md-6">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.html" class="py-2 d-block">Home</a></li>
            <li><a href="about.html" class="py-2 d-block">About</a></li>
            <li><a href="bookingform.html" class="py-2 d-block">Order</a></li>
          </ul>
        </div>
      </div>
            
            
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <p>Portafuel was established in 2018, and our aim is to create a digital fuel station for all motorists. 
We provide delivery to the users requested location. </p>
            </div>
          </div>



        </div>
      </div>
    <div class="container">
        <div class="row mb-5">
         <div class="col-md-6">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Social Media</h2>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com/Portafuel-443508372887065/?modal=admin_todo_tour" class="py-2 d-block">Facebook</a></li>
            <li><a href="https://twitter.com/portafuel1" class="py-2 d-block">Twitter</a></li>
            <li><a href="https://www.instagram.com/porta_fuel/" class="py-2 d-block">Instagram</a></li>
          </ul>
        </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
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