<<?php
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



$t5Total=array(start,second,third,fourth,fifth);
echo array_sum($t5Total);

header('Location: satQualify.php');

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}

}
mysqli_close($con);

?>
$t5Total=array(start,second,third,fourth,fifth);
echo array_sum($t5Total);
?> 