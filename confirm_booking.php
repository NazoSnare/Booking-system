<!DOCTYPE html>
<?php require("php/connection.php");
      $id=$_GET["id"];
	  ?>
<html lang="en">
	<head>
		<title>CONFIRM BOOKING</title>
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
                                <form action="booking.php" method="post">
									<h3 align="center">USER ID</h3>
									<?php	echo "<input type=\"text\" align=\"center\" name=\"id\" value=$id >"; ?>
									<h3 align="center">
									<div class="tmInput">
									    
										<strong>Select Car</strong>
										<select name="car">
										<?php 
											
											$result = mysqli_query($connection,"SELECT model,id from cars_available WHERE Available='YES'");
											$row=array();
											if(!$result){
												die("Database query failed:".mysql_error());
								            }
											
											while ($row = mysqli_fetch_array($result)){

												echo "	<option value={$row["id"]}>

															{$row["model"]}

														</option>";
											}
											
										?>
											</select>
											</div>
											<br />
						<div class="clear"></div>
									<div class="tmInput">	
										<strong>Select Driver</strong>
											<select name="driver">

												<?php 
													$result = mysqli_query($connection,"SELECT driver_name,driver_id from driver_available 		WHERE Available='YES'");
													$row=array();
													if(!$result){
														die("Database query failed:".mysql_error());
										            }
													while ($row = mysqli_fetch_array($result)){
														echo "	<option value={$row["driver_id"]}>

																	{$row["driver_name"]}

																</option>";
													}
												?>

											</select>
									</div>
									<br/>
										<div align="center" >
											<input class="btn" name="Submit" type="Submit" value="Submit">
										</div>	
										
										</h3>
						       </form>
					       </h1>
						</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			

	</body>
</html>
<?php 
  //Close connection
  if (isset($connection)) {
		mysqli_close($connection);
	}
?>