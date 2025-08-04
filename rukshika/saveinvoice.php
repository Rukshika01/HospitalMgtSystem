<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$patid=$_POST["p_id"];
$rf=$_POST["roomFee"];
$df=$_POST["doctorFee"];
$d=$_POST["date"];

$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}

$sql ="INSERT INTO invoice (patient_id,doctor_fee,room_fee,discharge_date) values ('$patid','$rf', '$df', '$d')";
$sql2 ="UPDATE patient,ward_room SET p_status='discharged' WHERE patient_id=$patid";
$sql3 = "SELECT wardroom_id FROM patient WHERE patient_id=$patid";
    
$sqlResult = $conn->query($sql3);
$fetchedResult=$sqlResult->fetch_assoc();
$fetchedPid = $fetchedResult['wardroom_id'];

$sql4 ="UPDATE ward_room SET wr_status='vacant' WHERE wardroom_id='$fetchedPid'";

if (mysqli_query($conn, $sql)) {
    $msg= "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql2)) {
    // echo "Patient record updated successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql4)) {
    // echo "Room record UPdated successfully";
  } else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
  }
?>
<script type="text/javascript">
 window.location="invoice.php?msg=New record created successfully";
</script>

</body>
</html>