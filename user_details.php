<!DOCTYPE html>
<?php 
	$connection = mysqli_connect("localhost","root","","tour and travel");
   if(!$connection) {
		die("Database connection failed: ".mysqli_connect_error());
	} 
?>
<?php
    $name = $_POST["Name"];
	$number = $_POST["Number"];
	$email = $_POST["Email"];
	$date_from = $_POST["Date_from"];
	$date_to = $_POST["Date_to"];
	$car_type = $_POST["Comfort"];
	$from = $_POST["From"];
	$to = $_POST["To"];
	$travellers = $_POST["Travellers"];
	$message = $_POST["Message"];
 ?>
 <?php
   if($name !='' && $number !='' && $email !=''& $date_from !='' && $date_to !=''&& $car_type !='' && $from !='' && $to !='' && $travellers !='' && $message !='')
	{
	$query = "INSERT INTO user ( id,name,email,number,date_from,date_to,car_type,place_from,place_to,no_of_travellers,message
				) VALUES ('NULL','$name','$email','$number','$date_from','$date_to','$car_type','$from','$to','$travellers','$message'
				)";
	if(mysqli_query($connection,$query)) {
		// Success
		echo "Success";
		header("Location: index.php");
		exit;
	} else {
	    // Display error message
		echo "Error: " . $query . "<br>" . mysqli_error($connection);
	}
	}
	else{ 
	header("Location: index.php#bookingForm");
	echo "Insert all fields "; 
	exit;
	}
 ?>
<?php mysqli_close($connection);?>