<?php
$age=300;
if($age  >= 20 && $age <=100){
	echo "<script>alert('you are adult')</script>";
}
elseif ($age<20 && $age >=10) {
	echo "<script>alert('you are  teenager!!')</script>";
	
}elseif($age>0){
	echo "<script>alert('you are  chirld')</script>";

}
else{
	echo "<script>alert('you age is not valid  ')</script>";

}
echo"<hr>";
// aut
$hour =date("H");
if ($hour >=6 && $hour <= 9) {
	echo "It's Breakfast Time";
}elseif($hour >=12 && $hour <=13){
	echo "It's Lunch Time";
}
elseif($hour >=19 && $hour <=21){
	echo "It's Dinner Time";
}else{
	echo "Pease be patient!! you will be notified soon";
}
echo "<hr>";

$date=date("D");
if ($date =="Mon" || $date=="Tue") {
	echo "we are begining of week";
}elseif($date == "Wed" || $date == "Thu" ){
	echo"We are at the middle of the week";
}elseif($date == "Fri" || $date == "Satur"  || $date =="Sun"){
	echo"We are at the weekend mood";
}
else{
	echo "calender has been changed";
}

?>