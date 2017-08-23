<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="saturday.css">
</head>
<body>
<p id="demo"></p>
<script>
function myFunction() {
    var txt;
    var person = prompt("Please enter your name:", "Name");
	var score = prompt("Please enter your score:", "Score");
    if (person == null || person == "") {
        txt = "User cancelled the prompt.";
    } else {
        txt = "" + person + " added";
    }
	 if (score == null || score == "") {
        txt = "User cancelled the prompt.";
    } else {
        txt = " " + person + " ," + score + " added";
    }
    document.getElementById("demo").innerHTML = txt;
}
function myFunction2() {
    var txt;
	var score = prompt("Please enter your score:", "Score");
	 if (score == null || score == "") {
        txt = "User cancelled the prompt.";
    } else {
        txt = " "+ score + " added";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','saturdayskeeball');


	$sql="SELECT number,name FROM qualifyingrounds ORDER BY number";
	
	
	
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	echo"<h1>Qualifying Round</h1>";
	echo"<button class=btn onclick=myFunction()>Add Player</button>    
		 <br><br>";
	echo "<br><table name='playerlist' id='playerlist' class='fields'>";
	echo' <tr>
    <th>Number</th>
    <th>Name</th> 
	<th>Top 5 Total</th>
	<th> Lowest </th>
	<th>Add Score</th>
    
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$number=$row['number'];
		$name=$row['name'];
		
	
		echo"<tr><td> $number</td>
			<td>  $name   </td>
			<td>2250</td>
			<td>250</td>
			<td><button class=btn onclick=myFunction2()>Add Score</button></td>
			</tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?>



