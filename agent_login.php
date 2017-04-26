<!DOCTYPE html>
<?php require("php/connection.php");?>
<html lang="en">
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
     table, th, td {
    border: 1px solid black;
    padding: 5px;}
    tr{
	align: center;
	}
     table {
    border-spacing: 0px;
    }
</style>
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>
	
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="new_booking.php">New Booking</a></li>
									<li><a href="booked_history.php">Booking History</a></li>
									<li><a href="cars_available.php">Cars Available</a></li>
									<li><a href="drivers_available.php">Drivers Available</a></li>
									<li><a href="index.php">Logout</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							
								<img src="images/logo.png" alt="Your Happy Family">
								<br />
								<br />
								<ul id="drop-nav">
								  <li><a href="#">Support</a></li>
								  <li><a href="#">Web Design</a>
								    <ul>
								      <li><a href="#">HTML</a></li>
								      <li><a href="#">CSS</a></li>
								      <li><a href="#">JavaScript</a></li>
								    </ul>
								  </li>
								  <li><a href="#">Content Management</a>
								    <ul>
								      <li><a href="#">Joomla</a></li>
								      <li><a href="#">Drupal</a></li>
								      <li><a href="#">WordPress</a></li>
								      <li><a href="#">Concrete 5</a></li>
								    </ul>
								  </li>
								  <li><a href="#">Contact</a>
								    <ul>
								      <li><a href="#">General Inquiries</a></li>
								      <li><a href="#">Ask me a Question</a></li>
								    </ul>
								  </li>
								</ul> 
						</h1>
						
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			

	</body>
</html>