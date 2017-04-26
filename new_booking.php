<!DOCTYPE html>
<?php require("php/connection.php");?>
<html lang="en">
	<head>
		<title>BOOKINGS</title>
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
									<li class="current"><a href="#">New Booking</a></li>
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
								
						</h1>
						<div>
						
						<?php
						    $result = mysqli_query($connection,"SELECT * from user");
							$row=array();
							if(!$result){
								die("Database query failed:".mysql_error());
							}
							 echo "<table width=\"100%\" border=\"1\" cellspacing=\"10\" align=\"center\" style=\"border: 1px solid 	black,padding: 4px;\" >";  

							 echo "	<th>ID</th>
							 		<th>Name</th>
							 		<th>E-mail</th>
							 		<th>Number</th>
							 		<th>Date_from</th>
							 		<th>Date_to</th>
							 		<th>Car_type</th>
							 		<th>From</th>
							 		<th>To</th>
							 		<th>Number of travellers</th>
							 		<th>Message</th>
							 		<th></th> ";

							while ($row = mysqli_fetch_array($result)){
								echo "<tr height=\"20\" style=\"border: 1px solid black,padding: 4px;\">";
								echo "<td width=\"30\" style=\"border: 1px solid black;\">
										".$row["id"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["name"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["email"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["number"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["date_from"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["date_to"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["car_type"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["place_from"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["place_to"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["no_of_travellers"]."
										</td>

										<td style=\"border: 1px solid black;\">
											".$row["message"]."
										</td>

										<td  style=\"border: 1px solid black;\">
											<a href=confirm_booking.php?id={$row["id"]}>
												CONFIRM
											</a>
										</td>";

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