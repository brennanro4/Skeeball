<?php
$con=mysqli_connect('localhost','root','','saturdayskeeball');


if (isset($_POST['submit']))
{

$name=$_POST['name'];
$start=$_POST['start'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];



$sql= "INSERT INTO qualifyingrounds (name,start,second,third,fourth,fifth)
Values('$name','$start','$second','$third','$fourth','$fifth')";

header('Location: satQualify.php');

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}

}
mysqli_close($con);

?>


<html>
<head>
<script>
 function display_alertadd()
 {
 alert("Player Added Successful");
 }
 </script>
<link rel="stylesheet" type="text/css" href="saturday.css">
<head>
<h1>Add Player</h1>
</head>

<body>
<form id="addplayer" action="addPlayer.php" method="POST">
<b>Player   :</b><input type="text"  name="name"><br>
<b>Score(1):</b><input type="number" name="start"><br>
<b>Score(2):</b><input type="number" readonly="readonly" name="second" value="0"><br>
<b>Score(3):</b><input type="number" readonly="readonly" name="third" value="0"><br>
<b>Score(4):</b><input type="number" readonly="readonly" name="fourth" value="0"><br>
<b>Score(5):</b><input type="number" readonly="readonly" name="fifth" value="0"><br>


<?Php
echo'<input type="submit" name="submit" onclick="display_alertadd()"  value="Submit Details">'?>
</form>
<button class="return"><a href="satQualify.php" >Return to Previous Page</button></a><br><br>
</body>
</html>