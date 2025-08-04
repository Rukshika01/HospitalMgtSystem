<html>
<head>
<title>Admin Login Page</title>
<style>
img{}
</style>
<?php include("header.php");?>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "hms";

if(isset($_POST['uname']))
{
$name=$_POST["uname"];
$id=$_POST["id"];
$password=$_POST["pass"];

$conn =new mysqli($servername,$username,$password,$databasename,"3308");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO admin(id,name,password) values ($id,'$name','$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<div style="margin-top:50px;"></div>
<div class="container">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5 jumbotron">
<form method="post">
<div class="form-group">
<img src="image/admin.jpg" width="400" heght="400">
<label>Username</label>
<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
</div>
<div class="form-group">
<label>ID Number</label>
<input type="number" name="id" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control">
<br>
<input type="submit" name="login" class="btn btn-success"> 

</div>
</div>
</div>
</div>

</body>
</html>