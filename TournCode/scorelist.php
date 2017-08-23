<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " UPDATE qualifyingrounds SET name='$_POST[name]',start='$_POST[start]',second='$_POST[second]',third='$_POST[third]',fourth='$_POST[fourth]',fifth='$_POST[fifth]' WHERE number='$_POST[number]'";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: amendScore.php');
		
		}
		else{
			echo"Update failed";
		}
		
		
?>