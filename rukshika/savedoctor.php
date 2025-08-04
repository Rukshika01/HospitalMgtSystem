<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$dname=$_POST["Dname"];
$spl=$_POST["specialist"];
$phoneno=$_POST["Dphoneno"];
$day=$_POST["ad"];

$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}
$sql ="INSERT INTO doctor (doctor_name,specialist,d_phone_no,available_days_id) values ('$dname','$spl', $phoneno, '$day')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
<script type="text/javascript">
    window.location="doctor.php";
</script>
</body>
</html>