<?php
$con=mysqli_connect('localhost','root','','saturdayskeeball');


	$sql="SELECT number,name,t5Total,lowest FROM qualifyingrounds ORDER BY number";
	
	
	
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='playerlist' id='playerlist' class='fields'>";
	echo' <tr>
    <th>Number</th>
    <th>Name</th> 
    <th>Top 5 Total</th>
	<th>Lowest score</th>
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$number=$row['number'];
		$name=$row['name'];
		$t5Total=$row['t5Total'];
		$lowest=$row['lowest'];
	
		echo"<tr><td> $number</td>
			<td>  $name   </td>
			<td>  $t5Total </td>  
			<td> $lowest </td></tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?>