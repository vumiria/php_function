<?php
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>function</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min"></script>
</head>
<body>
<h2>
<?php
session_start();
if(!isset($_SESSION['money'])){
$_SESSION['money']= 15000;
}
$accountNo="000-222-555";
$balance= $_SESSION['money'];
function checkba(){
        global $balance;
        return $balance;
}
function deposit(){
    global $balance;
    $amo=$_POST['money'];
    $balance=$balance + $amo;
    return $balance;

}
function withdrow(){
    global $balance;
    $amo=$_POST["money"];
$balance =$balance -$amo;
return $balance;    
}
function convertB(){
    global $balance;
    $dollar= $balance*1000;
    return $dollar;
}
$actionwith=['data'];
if(isset($_POST["account"])){
    $customer=$_POST['account'];
    if(($accountNo == $customer) && isset($_POST['check'])){
$actionwith['action']= "check";
$actionwith['data']= checkba();
    }
else if (($accountNo == $customer) && isset($_POST['deposit'])) {
    $actionwith['action']= "deposit";
$actionwith['data']= deposit();
}
else if (($accountNo == $customer) && isset($_POST['withdrow'])) {
    $actionwith['action']= "withdrow";
$actionwith['data']= withdrow();
}
else if (($accountNo == $customer) && isset($_POST['convert'])) {
    $actionwith['action']= "convertB";
$actionwith['data']= convertB();
}

}

// echo greeting();
// echo"===============";
?>
</h2>
<form method="post" class="form-group"><center>
<div class="col-md-12">
<h3>The Customer Check Account</h3>
<div class="col-md-4">
<input type="number"  name="account" class="form-control" placeholder="Fill Customer Account Number"></div><br>
<div class="col-md-4">

<input type="number" name="money" class="form-control" placeholder="Fill Number Of Money"></div><br>
<button type="submit" name="check" class="btn btn-default">Check Account</button>|
<button class="btn btn-default" type="submit"name="deposit">Deposit</button>|
<button class="btn btn-warning" type="submit"name="withdrow">Withdraw</button>|
<button class="btn btn-default" type="submit"name="convert">ConvertInDollar</button>

</div></center>
</form><br>
<hr style="background:#ea9876">
<center>
<div class="col-md-6" style="border-left:3px solid #7aebc5;border-right:3px solid #eba676;height:200px">
<h2><u><i>Customer Account Information</u></i></h2>
<h2>
<?php 
if(isset($actionwith['action'])){
?>
<span>
<?php if( $actionwith['action']=="check"){ ?>

Account No:<?php echo $accountNo; ?><br>
Balance:<?php echo $actionwith['data']; ?>
<?php
} ?>
</span>

<span>
<?php if( $actionwith['action']=="deposit"){ ?>

Account No:<?php echo $accountNo; ?><br>
New Balance:<?php echo $actionwith['data']; ?>
<?php
} ?>
</span>
<span>
<?php if( $actionwith['action']=="withdrow"){ ?>

Account No:<?php echo $accountNo; ?><br>
New Balance:<?php echo $actionwith['data']; ?>
<?php
} ?>
</span>
<span>
<?php if( $actionwith['action']=="convertB"){ ?>

Account No:<?php echo $accountNo; ?><br>
Balance In Dollar($):<?php echo $actionwith['data']; ?>
<?php
} ?>
</span>

<?php } ?>
</h2></div></center>
    
</body>
</html>