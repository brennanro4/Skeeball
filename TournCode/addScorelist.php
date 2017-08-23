<?php
$con=mysqli_connect('localhost','root','','saturdayskeeball');


	$sql="SELECT * FROM qualifyingrounds ORDER BY number";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><select name='scorelist' id='scorelist' class='fields'>";
	

	while ($row= mysqli_fetch_array($result))
	{
	
		$number=$row['number'];
		$name=$row['name'];
		
	
		echo"<option> $number   $name</option>";
			
			
	}
	
	echo "</select>";
	mysqli_close($con);
	?>