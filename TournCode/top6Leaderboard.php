<html>
<head>
<link rel="stylesheet" type="text/css" href="morris.css">
<script>
 function display_alert()
 {
 alert("Qualified");
 }
 function display_alert2()
 {
 alert("Not Qualified");
 }
 </script>
<title>Top 12</title>
</head>
<body>
<h1> Top 12</h1>
<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds WHERE through=2";
		
		//Execute query
		$records=mysqli_query($con,$sql);
		
		

?>
<table>
	<tr>
		<th>Number</th>
		<th>Name</th>
		<th>Qualified</th>
		</tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= top6CheckList.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=submit onclick=display_alert() value=Qualify>";
			
			echo"</form></tr>";
		}
		
			
		
		
	?>
	<?php
		//Connect to database
		$con=mysqli_connect('localhost','root','');
		//Select DB
		mysqli_select_db($con,'saturdayskeeball');
		
		//Select Query
		$sql= " SELECT * FROM qualifyingrounds WHERE through=3";
		
		//Execute query
		$records=mysqli_query($con,$sql);
		
		

?>
	<table>
	<tr>
		<th>Number</th>
		<th>Name</th>
		<th>Not </th>
		</tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= top12CheckList2.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=submit onclick=display_alert2() value=Not>";
			
			echo"</form></tr>";
		}
		
			
		
		
	?>

		
	</body>
	<?php
	echo"<button class=bn><a href=top6.php >On to Top 6</button></a><br><br>";
	echo"<button class=return><a href=satQualify.php >Return to Previous Page</button></a><br><br>";?>
	</html>	