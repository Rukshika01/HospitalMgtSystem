<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$id=$_POST["id"];
$pass=$_POST["pass"];

$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}

$sql ="INSERT INTO login (staff_id,password) values ($id,'$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
<script type="text/javascript">
    window.location="adminlogin.php";
</script>

</body>
</html>