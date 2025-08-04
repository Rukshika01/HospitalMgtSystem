<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$ri=$_POST["id"];
$pi=$_POST["p_id"];

$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);}
$sql ="INSERT INTO room_availability (patient_id,room_id) values ($pi,'$ri')";

if (mysqli_query($conn, $sql)) {?>
<script>
alert("successfully saved");
</script> 
<?php } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>

<script type="text/javascript">
    window.location="room.php";
</script>

</body>
</html>