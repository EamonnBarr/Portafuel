<!DOCTYPE html>
<html lang="en-GB">

  <head>



		<meta charset="UTF-8">
		<meta name="description" content="add brief description">
		<meta name="keywords" content="add keywords">
		<meta name="author" content="Eamonn Barr">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title>Error</title>

    <!--link to bootstrap--->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
    <!--link to favicon-->
		<link rel="shortcut icon" type="image/gif" href="images/favicon.gif"/>
		<!--link to font awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

  

    <section>
      <div class="container">
        <h1 class="text-center">Oops!</h1>
        <p class="text-center">Looks like there was a problem registering your account.</p>
        <p class="text-center">Try again below.</p>
        <form class="form-group" method="post" action="dbaddrecord.php">
          <div class="form-row justify-content-center">
            <div class="col-5">
              <input type="text" name="registerName" placeholder="first name">
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-5">
              <input type="email" name="registerEmail" placeholder="e-mail address">
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-5">
              <input type="password" name="registerPassword" placeholder="password">
            </div>
          </div>
          <div class="form-row justify-content-center">
            <button class="sendButton" type="submit"><span class="fa fa-check fa-2x" title="login"></span></button>
          </div>
        </form>
      </div>
    </section>

    <footer class="fdb-block footer-small">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-12 col-lg-4 text-lg-left">
            
          </div>

          <div class="col-12 col-lg-4 mt-4 mt-lg-0">
            <a href="index.html"><img class="footerLogo" src="images/logo_Eamonn_white.png" alt="Eamonn Logo"></a>
          </div>

         
              </li>
            </ul>
          </div>
      
   
  </body>

</html>
