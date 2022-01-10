<?php echo"<center>";
$number=1;
while($number <=10){
 echo $number;
 echo"<br>";
 if ($number!=10) {
 	break;
 }
 $number++;
}
echo "</center>";
echo"<hr>";
$number1=0;
do{
	 echo "Good morning tuesday!!!";
	 echo"<br>";
	 $number1++;
	}
while($number1!=5);
echo"<hr>";

$color = array('Red','Green', 'Bue' );
foreach ($color as  $value) {
    echo $value;
    echo "<break>";

}
define("COMP", "nova-services");
define("PI",3.14);
echo"<br";
echo PI;
echo "<hr>";

const P=22/7;
const compact="nova-services ltd";
echo P;
echo "<br>";
echo COMP;
const PORT = 8080;
echo PORT;







 ?>

