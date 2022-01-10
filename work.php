<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>traffic light</title>
</head>
<body>
<h3><strong>Trafic Light App</strong></h3>
<form method="post">
	<label>trafic light</label>
	<input type="text" name="light" placeholder="Enter Trafic Light">
	<input type="submit" name=" save" value="check">
</form>
</body>
</html>
<?php 
if (isset($_POST['save'])) {
$light=$_POST["light"];
if ($light == "green") {
	echo "<script>alert('GO')</script>";
}
elseif($light == "red"){
	echo"<script>alert('RED')</script>";
}
elseif($light == "yellow"){
	echo "<script>alert('Be READY')</script>";
}
else{
	echo "<script>alert('SOMETHING WENT WRONG')</script>";
}
}

?>