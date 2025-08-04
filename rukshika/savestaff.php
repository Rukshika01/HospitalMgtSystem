<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$sname=$_POST["Sname"];
$ad=$_POST["address"];
$phoneno=$_POST["Sphoneno"];
$gen=$_POST["gender"];
$rid=$_POST["rid"];


$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}

$sql ="INSERT INTO staff (staff_name,s_address,s_phone_no,s_gender,room_id) values ('$sname','$ad',$phoneno,'$gen','$rid')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
<script type="text/javascript">
    window.location="staff.php";
</script>

</body>
</html>