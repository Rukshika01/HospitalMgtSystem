<?php
include('config.php');  
$id=$_GET["id"];
$result=mysqli_query($conn,"select * from staff where staff_id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Assign login</title>
    <style>
    .col-md-6{
      width:25%;}
    body{
      text-align:center;}
    </style>
</head>
<body>
<form action="saveassignlogin.php" method="POST" name="">
  <div class="row">
    <div class="col-md-2">
    <a href="firstpage.html">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
               HOMEPAGE
              </button><br></a><br>
    </div>
    <div class="col-md-4"><br>
    <label for="">Staff ID</label><br>
    </div>
    <div class="col-md-6"><br>
      <input class="form-control" type="text" id="id" name="id" placeholder="Staff ID.." value="<?php echo $id; ?>" required></div>
  </div>
      
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <label for="">Password</label></div>
    <div class="col-md-6">
      <input class="form-control" type="text" id="pass" name="pass" placeholder="Password.."></div>
  </div>
  <br><br>

  <button type="submit" class="btn btn-success" name="save" style="color:black;border:2px solid black;">Save</button>
  <a href="adminlogin.php">
    <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  
  </a>   
</body>
</html>