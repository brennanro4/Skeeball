<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " UPDATE qualifyingrounds SET through=1 WHERE number='$_POST[number]'";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: qualifycheck.php');
		
		}
		else{
			echo"Update failed";
		}
		
		
?>