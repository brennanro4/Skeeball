<html>
<head>
<link rel="stylesheet" type="text/css" href="morris.css">
<script>
 function display_alert()
 {
 alert("Update Successful");
 }
 </script>
<title>Change Scores</title>
</head>
<body>
<h1> Change Scores</h1>
<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds";
		
		//Execute query
		$records=mysqli_query($con,$sql);
		
		

?>
<button class="dm"><a href="satQualify.php" >Return to Previous Page</button></a><br><br>
<table>
	<tr>
		<th>Number</th>
		<th>Name</th>
		<th>Score(1)</th>
		<th>Score(2)</th>
		<th>Score(3)</th>
		<th>Score(4)</th>
		<th>Score(5)</th></tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= scorelist.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=number name=start value='".$row['start']."'</td>";
			echo"<td><input type=number name=second value='".$row['second']."'</td>";
			echo"<td><input type=number name=third value='".$row['third']."'</td>";
			echo"<td><input type=number name=fourth value='".$row['fourth']."'</td>";
			echo"<td><input type=number name=fifth value='".$row['fifth']."'</td>";
			echo"<td><input type=submit onclick=display_alert() value=Update>";
			echo"</form></tr>";
		}
		
		
	?>
		
	</body>

	</html>	