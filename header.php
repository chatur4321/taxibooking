<!DOCTYPE html>
<html>

<head>
  <title>CedCab</title>
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style123.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
</head>

<body>
    


	<?php 
			if(isset($_SESSION['username'])){
	?>
			<div class="topnav">
        <h1 id="" style="float: left;">Ced<span>Cab</span></h1>
				<a href="#" style="float: left;text-transform: uppercase;">
					<?php echo "WELCOME"." ".$_SESSION['username']; ?>
				</a>
       
    			<!-- <a class="active" href="login.php">Login</a>
    			<a href="registration.php">Registration</a> -->
    			<a href="logout.php">Logout</a>
  			</div>
	<?php
			}
			else
			{
	?>
			<div class="topnav">
          <h1 id="">Ced<span>Cab</span></h1>
    			<a class="active" href="login.php">Login</a>
    			<a href="registration.php">Registration</a>
    			<a href="index.php">Home</a>
    			<!-- <a id="logout">Logout</a> -->
  			</div>
	<?php 
			}
	?>










