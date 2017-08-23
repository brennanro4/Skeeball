<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds";
		
		$result = mysqli_query($con,"SELECT coalesce(`start`,0)+ coalesce(`second`,0)+ coalesce(`third`,0)+ coalesce(`fourth`,0)+ coalesce(`fifth`,0) as total from qualifyingrounds"); 
		if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table>";
	echo"<tr>
    <th>Number</th>
    <th>Name</th> 
    <th>Top 5 Total</th>
	
	
  </tr>";
		while($row = mysqli_fetch_assoc($result))
{ 
$number=$row['number'];
$name=$row['name'];
$sum = $row['total'];

echo"<tr><td> $number</td>
			<td>  $name   </td>
			<td>  $sum </td>  
			</tr>";
}
		
		
		
	

		
		
	?>
		
	</body>
	<button class="return"><a href="satQualify.php" >Return to Previous Page</button></a><br><br>
	</html>	