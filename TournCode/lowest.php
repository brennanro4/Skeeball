<html>
<head>
<link rel="stylesheet" type="text/css" href="morris.css">
<script>
 function display_alert()
 {
 alert("Update Successful");
 }
 </script>
<title>Lowest Scores</title>
</head>
<body>
<h1>Lowest Scores</h1>
<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds";
		
		$records = mysqli_query($con,$sql); 
		if(!$records= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	?>
<table>
	<tr>
		<th>Number</th>
		<th>Name</th>
		<th>Lowest</th>
	</tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= lowestlist.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=number name=start value='".$row['lowest']."'</td>";
			echo"</form></tr>";
		}
		
		
	?>
		
	</body>
	<button class="return"><a href="satQualify.php" >Return to Previous Page</button></a><br><br>
	</html>	