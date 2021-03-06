<!DOCTYPE html>
<?php require("php/connection.php");?>
<html lang="en">
	<head>
		<title>DRIVERS AVAILABLE</title>
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
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
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
									<li class="current"><a href="#">Drivers Available</a></li>
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
								
						</h1>
						<div>
						
						<?php
						    $result = mysqli_query($connection,"SELECT * from driver_available");
							$row=array();
							if(!$result){
								die("Database query failed:".mysql_error());
							}
							 echo "<table width=\"50%\" border=\"1\" cellspacing=\"10\" align=\"center\" style=\"border: 1px solid black,padding: 4px;\" >";  
							 echo "<th>Driver ID</th><th>Name</th><th>Available</th><th>Booked Till</th>";
							while ($row = mysqli_fetch_array($result)){
								echo "<tr height=\"20\" style=\"border: 1px solid black,padding: 4px;\">";
								echo "<td width=\"30\" style=\"border: 1px solid black;\">".$row["driver_id"]."</td><td style=\"border: 1px solid black;\">".$row["driver_name"]."</td><td width=\"30\" style=\"border: 1px solid black;\">".$row["Available"]."</td><td width=\"0\" style=\"border: 1px solid black;\">".$row["booked_till"]."</td>"; 
						        echo "</tr>";
							 }
						?>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			

	</body>
</html>