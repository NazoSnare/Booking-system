<!DOCTYPE html>
<?php


	$givenid=$_POST['username'];
	$givenpass=$_POST['password'];
	
	if($givenid || $givenpass)
	{
		try{
			
	    $servername="localhost";
		$user="root";
		$pass="";
		$database="tour and travel";
		$conn = mysqli_connect($servername,$user,$pass,$database);
		if (!$conn) 
		{
           die("Connection failed: " . mysqli_error());
        }

       $query="SELECT * FROM agent WHERE username='$givenid' AND password='$givenpass'";
       $result = mysqli_query($conn,$query);
	   $row=mysqli_fetch_row($result);
	   $query1="DELETE FROM car_booked WHERE date_to>".date("Y/m/d");
	   $query2="UPDATE cars_available SET Available='YES',booked_till='' WHERE booked_till>".date("Y/m/d");
	   $query3="UPDATE driver_available SET Available='YES',booked_till='' WHERE booked_till>".date("Y/m/d");
	  
	   if(isset($row[1]))
		{
			mysqli_query($conn,$query1);
			mysqli_query($conn,$query2);
			mysqli_query($conn,$query3);
			Header("Location: agent_login.php");
			exit;
		}
		else
		{
			Header("Location: sign_in_1.php");
		}
	   
       mysqli_close($conn);
		}
		catch(Exception $e)
		{
			echo "Error!";
		}
	}
	else{
	 Header("Location: sign_up.php");
	 exit;
	 }
?>