<?php
echo "<u><center><h1>Nationality Voting!</h1></cenetr></u>";
$age= 18;
$nationality="Rwandan";
echo "<center>";
if ($nationality == "Rwandan") {
	if ($age>=18) {
		echo "you eligible to vote";
	}else{
		echo "you are under age";
	}
}else{
	echo"you are not a citizen of this country.";
}
echo"</center>";
?>
<hr>
<center><h1>switch case</h1></center>
<?php
$day=date("D");
 switch ($day) {
 	case'Mon':
 		echo "monday";
 		break;
 		case 'Tue':
 		echo "tuesday";
 		break;
 		case 'Wed':
 		echo "wednesday";
 		break;
 		case 'Thu':
 		echo "thursday";
 		break;
 		case 'Fri':
 		echo "friday";
 		break;
 		case 'Sat':
 		echo "suturday";
 		break;
 		case 'Sun':
 		echo "sunday";
 		break;
 	
 	default:
 		echo "unkown day";
 		break;
 }
	?>
	<hr>
<center><h1>switch case with number </h1></center>
<?php
$day=5;
 switch ($day) {
 	case'1':
 		echo "monday";
 		break;
 		case '2':
 		echo "tuesday";
 		break;
 		case '3':
 		echo "wednesday";
 		break;
 		case '4':
 		echo "thursday";
 		break;
 		case '5':
 		echo "friday";
 		break;
 		case '6':
 		echo "suturday";
 		break;
 		case '7':
 		echo "sunday";
 		break;
 	
 	default:
 		echo "unkown day";
 		break;
 }
	?><hr>