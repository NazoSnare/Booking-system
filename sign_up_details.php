<!DOCTYPE html>
<?php 
	$connection = mysqli_connect("localhost","root","","tour and travel");
   if(!$connection) {
		die("Database connection failed: ".mysqli_connect_error());
	} 
?>
<?php
	$fname = $_POST["Fname"];
	$lname = $_POST["Lname"];
	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$cpassword=$_POST["cpassword"];
	if($password!=$cpassword)
	{echo "Password not confirmed";}
	else if($fname !='' && $lname !='' && $username !='' && $password !='')
	{
	$query = "INSERT INTO agent ( id,fname,lname,username,password) VALUES ( 'NULL','$fname','$lname','$username','$password')";
	if(mysqli_query($connection,$query)) {
		// Success
		echo "Success";
		header("Location: sign_in_2.php");
		exit;
	} else {
	    // Display error message
		echo "Error: " . $query . "<br>" . mysqli_error($connection);
	}
	}
	else{ echo "Insert all fields "; 
	}
	
 ?>
<?php mysqli_close($connection);?>