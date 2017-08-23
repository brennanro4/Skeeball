<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " UPDATE qualifyingrounds SET through=2 WHERE number='$_POST[number]'";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: top12.php');
		
		}
		else{
			echo"Failed";
		}
		
		
?>