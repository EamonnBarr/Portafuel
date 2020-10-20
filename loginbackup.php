<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<head>
<link rel="stylesheet" href="css/login.css">
<title>Log In</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="img/login_background.jpg">



<div class="container">

	<form class="form-signin" name="form1" method="post" action="dbpasscheck.php"> 
		<h1 class="form-signin-heading text-muted">Sign In</h1>
            <input type="text" class="form-control" placeholder="Username" name="inputUser" id="inputUser" required="" autofocus="">
                <input type="password" class="form-control" placeholder="Password" name="inputPass" id="inputPass" required="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" value="log In" Name="Submit">
                        Sign In
                    </button>
                 <button class="btn btn-lg btn-primary btn-block" type="submit" value="Register" Name="Register" onclick="window.location.href='register.php'">
                     Register
              </button>
           </form>
        </div>
    </body>
</html>