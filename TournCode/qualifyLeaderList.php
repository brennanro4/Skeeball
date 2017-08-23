<?php
$con=mysqli_connect('localhost','root','','saturdayskeeball');


	$sql="SELECT * FROM qualifyingrounds ORDER BY t5Total DESC";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='qualiferlist' id='qualifierlist' class='fields'>";
	echo' <tr>
    <th>Number</th>
    <th>Name</th> 
    <th>Top 5 Total</th>
	<th>Qualified</th>
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$number=$row['number'];
		$name=$row['name'];
		$t5Total=$row['t5Total'];
	
		echo"<tr><td> $number</td>
			<td>  $name   </td>
			<td>  $t5Total </td>  
			<td><input id='checkBox' type='checkbox'></td>
			</tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?>