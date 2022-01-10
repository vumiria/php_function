<center><table border="1">
<?php 
for ($i=1; $i<=10  ; $i++) { 
	echo"<tr>";
	for ($b=2; $b <=12 ; $b++) { 
		echo"<td>";
		echo $i."*".$b."=".$i*$b."</td>";
	}
}
 ?>
</table></center>
<form method="POST">
	<center>
	<input type="text" name="mult" placeholder="Enter any number"><br>
	<button type="submit" name="check">Check</button>
</center>
</form>
<table border="1">
<?php
if (isset($_POST['check'])) {


$na=$_POST['mult']; 
for($n=1;$n<=12;$n++){
	echo"<tr>";
	if ($na<=0) {
		
		echo "unkown";
		break;
	}
	echo"<td>";
	echo $n."*".$na."=".$n*$na."</td>";
}}



echo"<hr>";

echo"<center><h2>";
$color = array("green","red","yellow");
$cities = array (
	'kgl'=>'kigali',
	'ug'=>'uganda',
	'kny'=>'kenya',

);
	echo$cities['kgl']."<br>";
echo$cities['ug']."<br>";
echo$cities['kny']."<br>";

$developer=array(10,20,30,40,50,60,70,80);
// array(10,20,30,40,50,60,70,80);
print_r(array_reverse($developer));
echo array_sum($developer);
echo "<hr>";
var_dump(array_slice($developer, -5,4));
?>
