<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body >
<div class="col-md-3 bg-primary"><center>
    <form method="post"><br>
    <input type="text" name="name" class="form-control"><br>
    <input type="text" name="email" class="form-control"><br>
    <textarea  class="form-control" name="coment"></textarea>
    <button class="btn btn-danger" name="send">save</button>
    </div>
    </center>
    
    </form>
<?php
if(isset($_POST['send'])){
    $nam=htmlspecialchars($_POST['name']);
    $em=htmlspecialchars($_POST['email']);
    $cm=htmlspecialchars($_POST['coment']);
    echo "Name :$nam"."<br>";
    echo"email:$em"."<br>";
    echo"Coment :$cm";
}
?>

</body>
</html>