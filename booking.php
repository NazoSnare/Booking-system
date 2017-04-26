<!DOCTYPE html>
<?php require("php/connection.php")?>
<? php

	$id = $_POST["id"];
	$driver = $_POST["driver"];
	$car= $_POST["car"];
	$row = array();
	$result1 = mysqli_query($connection,"SELECT name,date_from,date_to FROM user WHERE id=$id");
	$result2 = mysqli_query($connection,"SELECT model FROM cars_available WHERE id=$car");
	$result3 = mysqli_query($connection,"SELECT driver_name FROM driver_available WHERE driver_id=$driver");
	$row1 = mysqli_fetch_array($result1);
	$row2 = mysqli_fetch_array($result2);
	$row3 = mysqli_fetch_array($result3);
	$query = "INSERT into car_booked (id,user,car_assigned,driver_assigned,date_from,date_to)
	           VALUES ('NULL','{$row1['name']}','{$row2['model']}','{$row3['driver_name']}','{$row1['date_from']}','{$row1['date_to']}')";
	$query1 = "DELETE from user WHERE id={$id}";

	if(mysqli_query($connection,$query)&&mysqli_query($connection,$query1)) {
		// Success
		$query2 = "UPDATE cars_available SET Available='NO',booked_till='{$row1['date_to']}' WHERE id={$car}";
		$query3 = "UPDATE driver_available SET Available='NO',booked_till='{$row1['date_to']}' WHERE driver_id={$driver}";
		mysqli_query($connection,$query2);
		mysqli_query($connection,$query3);
		header("Location: agent_login.php");
		
		
	} else {
	    // Display error message
		echo "Error: " . $query . "<br>" . mysqli_error($connection);
	}
?>
<?php mysqli_close($connection);?>