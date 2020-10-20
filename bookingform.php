<?php 
error_reporting(0);
$userid=$_GET["rowid"];
  

$conn = mysqli_connect("localhost", "B00712667", "LLtkdjd4")
    or die("Could not connect: " . mysqli_error($conn));


mysqli_select_db($conn , 'B00712667') or die ('db will not open' ); 


$sql ="SELECT * FROM Members WHERE userid='$userid'";

$result = mysqli_query($conn, $sql) or die("Invalid query");

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)){
        $row["dbpassword"];
        $id=$row["userid"];
        $username=$row["dbusername"];
        $email=$row["email"];
        $fueltype=$row["fueltype"];
        
    }
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

	<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bcss/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="bcss/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">


    
    <script type = "text/javascript">
    
        
    function validation(){
        var name = document.bookingform.name.value;
        var email = document.bookingform.email.value;
        var L = document.forms["bookingform"]["email"].value;
        var atsign = L.indexOf("@");
        var dotsign = L.lastIndexOf(".");
        
        
        
        //validation of input; First Name to be characters a to z only. 

        for (i=0;i<name.length;i++){ 
    
        if ((name[i] < "A") || (name[i] > "z") || ((name[i] > "Z") && (name[i] < "a"))){
            window.alert("Name can contain A to Z characters only.");
            return false; 
     }
}

        
        //Form Validation: Email @ and . positioning
        if (atsign < 1 || dotsign < atsign + 2 || dotsign + 2 >= L.length) {
                alert("Please enter a valid e-mail address");
                return false;
        }
        return:true;
    
    }
        
        
    
    </script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBx2Rf-b3galulBNFbtXWfFVOZwgk3RCUU"></script>
      <script type = "text/javascript">
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var lat=position.coords.latitude;
  var lon=position.coords.longitude;
  var latlon=new google.maps.LatLng(lat, lon)
  var mapholder=document.getElementById('mapholder')
  mapholder.style.height='250px';
  mapholder.style.width='100%';
  document.cookie = 'coords='+latlon;
      

  var myOptions={
  center:latlon,zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }

          
          
      </script>     
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="images/PortaFuelBlue.png" width="30%" style="  background-repeat: no-repeat;
  background-size: auto;">
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
    



	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
                <br /><br /><br /><br />
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Book your fuel delivery today</h1>
							<p>Forget driving to fuel station and long waiting times in the que, as we come to you! We help you save valuable time and money.</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form name="bookingform" method="post" action="sendbooking.php">
								<div class="form-group">
									<!-- <div class="form-checkbox">
										<label for="yes">
											<input type="radio" value="yes" name="member">
											<span></span>I am a member
										</label>
										<label for="no">
											<input type="radio" value="no" name="member">
											<span></span>I'm not a member
										</label>
									
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Name</span>
											<input class="form-control" name="name" type="text" value ="<?php echo $username?>"placeholder="Enter your full name" required>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Your Email Address</span>
											<input class="form-control" name="email" type="text" placeholder="e.g. johnsmith@mail.co.uk" required>
										</div>
									</div>

								</div>
                                <div class="row">
                                <div class="col-md-6">
                            
										<div class="form-group">
											<span class="form-label">Delivery Address</span>
											<input class="form-control" name="deliveryaddress" type="text" placeholder="inc. Postcode">
										</div>
									</div>
                                        <div class="col-md-6">
										<div class="form-group">
         <input type="button" class="submit-btn" onclick="getLocation();" value="or Find Location"/>
										</div>
									</div>
                                </div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Delivery Date</span>
											<input class="form-control" name="deliverydate" id="deliverydate" type="date" placeholder="yyyy/mm/dd" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											 <span class="form-label">Delivery Time</span>
											<select name="deliverytime" class="form-control">
                                               
												<option>8:00</option>
												<option>8:30</option>
                                                	<option>9:00</option>
                                                	<option>9:30</option>
                                                	<option>10:00</option>
                                                	<option>10:30</option>
                                                	<option>11:00</option>
                                                	<option>11:30</option>
                                                	<option>12:00</option>
                                                	<option>12:30</option>
                                                	<option>13:00</option>
                                                	<option>13:30</option>
                                                	<option>14:00</option>
                                                	<option>14:30</option>
                                                	<option>15:00</option>
                                                	<option>15:30</option>
                                                	<option>16:00</option>
                                                	<option>17:30</option>
                                                	<option>18:00</option>
                                                	<option>18:30</option>
                                                	<option>19:00</option>
                                                    <option>19:30</option>
                                                <option>20:00</option>
                            
											</select>
                                            <span class="select-arrow"></span>
										</div>
									</div>
                                    <?php
                                        
                                    ?>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Fuel Type</span>
											<input type="text" name="fueltype" placeholder="Petrol/Diesel" value ="<?php echo $fueltype?>" class="form-control">
												
											<span class="select-arrow"></span>
										</div>
									</div>
                                    
                                    <div class="col-md-4">
										<div class="form-group">
											      

											<span class="select-arrow"></span>
										</div>
									</div>
									
								</div>
								<div class="form-btn">
									<button class="submit-btn" onclick="validation()">Place your order</button>
								</div>
							</form>
						</div>
					</div>
				</div>
                
                
			</div>
		</div>
	</div>
      <br />
      <br />
      <section>
      <div class="section-center">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div id="mapholder"></div>     
            <div id="demo"></div> 
          </div>
            </div></div>
      </div>
        
      <br />
      <br />
          </section>
</body>

</html>