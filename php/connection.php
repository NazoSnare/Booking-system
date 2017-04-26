<!DOCTYPE html>
<?php 
	$connection = mysqli_connect("localhost","root","","tour and travel");
   if(!$connection) {
		die("Database connection failed: ".mysqli_connect_error());
	}
?>