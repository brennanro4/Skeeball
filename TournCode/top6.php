<html>
<head>
<link rel="stylesheet" type="text/css" href="morris.css">
<script>
 function display_alert()
 {
 alert("Score Entered");
 }
 </script>
<title>Top 6</title>
</head>
<body>
<h1> Top 6</h1>
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
		<th>Score(1)</th>
		<th>Score(2)</th>
		<th>Score(3)</th>
		</tr>
		
	<?php
		while($row= mysqli_fetch_array($records))
		{
			echo"<tr><form action= top6list.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=number name=top61 value='".$row['top61']."'</td>";
			echo"<td><input type=number name=top62 value='".$row['top62']."'</td>";
			echo"<td><input type=number name=top63 value='".$row['top63']."'</td>";
			echo"<td><input type=submit onclick=display_alert() value=Update>";
			echo"</form></tr>";
		}
		
		
	?>
		
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
			echo"<tr><form action= top6CheckList2.php method=post>";
			echo"<td><input type=number name=number readonly=readonly value='".$row['number']."'</td>";
			echo"<td><input type=text name=name readonly=readonly value='".$row['name']."'</td>";
			echo"<td><input type=submit onclick=display_alert2() value=Not>";
			
			echo"</form></tr>";
		}
		
			
		
		
	?>
	</body>
	<?php
		echo"<button class=bn><a href=final3.php >On to Final 3</button></a><br><br>";
	echo"<button class=return><a href=top12.php >Return to Previous Page</button></a><br><br>";?>
	</html>	