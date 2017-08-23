<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " UPDATE qualifyingrounds SET name='$_POST[name]',final1='$_POST[final1]',final2='$_POST[final2]',final3='$_POST[final3]',final4='$_POST[final4]',final5='$_POST[final5]',final6='$_POST[final6]',final7='$_POST[final7]',final8='$_POST[final8]',final9='$_POST[final9]',final10='$_POST[final10]' WHERE number='$_POST[number]'";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: final3.php');
		
		}
		else{
			echo"Update failed";
		}
		
		
?>