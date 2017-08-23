<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " UPDATE qualifyingrounds SET name='$_POST[name]',top61='$_POST[top61]',top62='$_POST[top62]',top63='$_POST[top63]' WHERE number='$_POST[number]'";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: top6.php');
		
		}
		else{
			echo"Update failed";
		}
		
		
?>