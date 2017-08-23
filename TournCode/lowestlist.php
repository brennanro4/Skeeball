<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Update Query
		$sql= " SELECT number, CASE WHEN `start`<`second` AND `start`<`third` AND `start`<`fourth` AND `start`<`fifth`THEN `start` WHEN `second`<`start` AND `second`<`third` AND `second`<`fourth` AND `second`<`fifth`THEN `second` WHEN `third`<`start` AND `third`<`second` AND `third`<`fourth` AND `third`<`fifth`THEN `third` WHEN `fourth`<`start` AND `fourth`<`third` AND `fourth`<`second` AND `fourth`<`fifth`THEN `fourth` ELSE fifth END AS `lowest` FROM qualifyingrounds  '";
		
		//Execute query

		if(mysqli_query($con,$sql)){
			header('Location: satQualify.php');
		
		}
		else{
			echo"Update failed";
		}
		
		
?>	
		
		
	