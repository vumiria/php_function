<?php 
$month=array("junuary","february","march","april","may","june","july","august","september","november","december");
foreach($month as $v){
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo  $v;

}
echo"<hr>";
$year = array('mn'=>"junuary",
	'mn'=>"31", 
	'mn'=>"february",
	'dat'=>"29-28",
	'mn'=>"april",
     'dat'=>"31",
	'mn'=>"may",
	'dat'=>"31",
	'mn'=>"june",
	'dat'=>"31",
	'mn'=>"july",
	'dat'=>"31",
	'mn'=>"august",
	'dat'=>"31",);
echo "<hr>";
$cities = array(
	'rd'=>'RWANDA',
    'uk'=>'united kingdom',
    'us'=>'united state',
);
	echo $cities ['rd'];
	echo "<hr>";
	$employ=array("nova-services"=>"manager","sammy","$1000000");
	echo"<br>";
	foreach ($employ as  $manager){
		echo"&nbsp;";
		// echo"<br>";
		echo $manager;
		echo"<br>";


	$employ=array("nova-services"=>"secretary ","kk","$3000000");
	
			foreach($employ as $secretary){
			echo"&nbsp";
			// echo"<br>";
			echo$secretary;
			}
			$saralies=array("manager","$30000","secretary","3000");			
		}
echo"<hr>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
		<th>month</th>
		<th>date</th>
		</tr>
		<tr>

			<td><?php 
			foreach ($year as $value ) {
				echo $value['mn'];
			}
			?>
				
			</td>
			<?php 
				
			?>
			<td><?php 
foreach ($year as $key){
			echo $key['dat']; 
		}
	?></td>

		</tr>
	
	</table>

</body>
</html>

