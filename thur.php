<h1>TWELVE MONTH OF YEAR</h1>
<hr>
<center>
<?php 
$month=array("junuary","february","march","april","may","june","july","august","september","november","december");
foreach($month as $v){
	echo "<br>";
	echo  $v;

}
echo "<hr>";
$year=array("blue","red","green","violet");
$number=array("10","20","30");
$choose=array("true","false");
$size= sizeof($year);
echo $size;
echo "<hr>";
array_pop($year);
print_r($year);
echo "<hr>";
array_push($year, "pink");
print_r($year);
echo "<hr>";
array_shift($year);
print_r($year);
echo "<hr>";
array_unshift($year,"purple");
print_r($year);
echo "<hr>";
sort($year);
print_r($year);
echo "<hr>";
print_r(array_merge($year,$number,$choose));

echo"<hr>";
$combine = array();
$combine = array_merge($year,$number,$choose);
print_r( $combine);
foreach( $combine as $value){
	echo $value;
	echo "<hr>";
	
}


?>
 </center>
