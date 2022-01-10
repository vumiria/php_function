
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>customer discount</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12 d-flex">

<form method="post" class="form-group">
<input type="text" class="form-control" name="prd" placeholder="fill any product Name"><br>

<input type="number" class="form-control" name="number" placeholder="fill any number">&nbsp;&nbsp;&nbsp;&nbsp;|
<button type="submit" class="btn btn-default" name="check">Pay</button>|
<button type="submit" class="btn btn-warning" name="pay">check</button>|

</form>
</div>
</body>
</html>
<?php
if(isset($_POST['check'])){
    $pr=$_POST['prd'];
    $number=$_POST['number'];
    echo "product name:".$pr."<br>";
    echo "payment".$number."<br>";
    include('in.php');
  $number=discount($number);
  echo $number;
}  ?>
<hr><center><h2> The square of your number is</h2></center>
  <?php 
if(isset($_POST['pay'])){
    $sa=$_POST['number'];
    
 function square($sa){

   for ($i=1; $i<$sa ; $i++) {
       $sq=$i*$i;
       echo "<br>";
       echo $sq;
}
}
square($sa);
}
?>  