<html>
<head>
<link rel="stylesheet" type="text/css" href="morris.css">
<script>
 function display_alert()
 {
 alert(" Delete Successful");
 }
 </script>
<title>Clear Database</title>
</head>
<body>
<h1>Clear Database</h1>
<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds ";
		
		//Execute query
		$records=mysqli_query($con,$sql);
		
		

?>
<table>
	<tr>
		<th>Number</th>
		<th>Name</th>
		</tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= finishlist.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=submit onclick=display_alert() value=Delete>";
			echo"</form></tr>";
		}
		
		
	?>
		
	</body>
	<button class="bn"><a href="https://www.youtube.com/watch?v=M3fkZeWsyvo" >Happy End</button></a><br><br>
	<button class="btn"><a href="satQualify.php" >Regular End</button></a><br><br>
	<button class="return"><a href="top6.php" >Return to Previous Page</button></a><br><br>
	</html>	