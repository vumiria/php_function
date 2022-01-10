<?php  
for ($count=1; $count <=10 ; $count++) { 
	$mut=$count * 2;
	echo "multplicatio of".$count.""."to".""."2"."=".$mut;
	echo"<br>";
}

echo "<hr>";
for ($row=1; $row <=5 ; $row++) { 
	for ($column=1; $column <=10 ; $column++) { 
		if ($column %2 ==0) {
			break;
		}
		echo"col"."".$column."=>";
		echo "row"." ".$row;
		echo "<br>";
	}
}
echo"<hr>";
$employ=array("samuel","shema","annet","cynthia","kevine","mimi","kamaliza");
for ($count=0; $count <7; $count++) { 
	$no =$count+1;
	echo $no." ".$employ[$count];
	echo"<br>";
}
?>