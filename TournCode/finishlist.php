<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " DELETE  FROM qualifyingrounds";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: finish.php');
		
		}
		else{
			echo"Delete failed";
		}
		
		
?>