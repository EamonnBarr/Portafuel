<?php
include "session.php";

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
  header("location: login.php");
  exit;
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
.home-main{
			background: #78d5ef;
			color:#fff;
			padding: 13%;
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
</style>
<div class="container-fluid home-main">
		<h2>Administrator Page <span class="blinker">.</span></h2>
		<button type="button" class="btn btn-default"><a href="orders.php" class="text-dark">View Orders</a></button>
        <br/><br/>
        <button type="button" class="btn btn-default"><a href="logout.php" class="text-dark">Log Out</a></button>
	</div>
	<div class="container-fluid home-content1">
    
