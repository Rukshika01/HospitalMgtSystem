<html>
<body>
<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="arogya";

$pname=$_POST["name"];
$Gender=$_POST["gen"];
$Age=$_POST["ag"];
$Address=$_POST["add"];
$phoneno=$_POST["phonen"];
$did=$_POST["docid"];
$addate=$_POST["date"];
$bgroup=$_POST["blgroup"];
$Weight=$_POST["wei"];
$allergy=$_POST["all"];
$famhis=$_POST["fam"];
$surgery=$_POST["sur"];
$med=$_POST["medication"];
$wrid=$_POST["wrid"];

$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);}

$sql ="INSERT INTO patient (patient_name,gender,age,address,phone_no,doctor_id,admitted_date,blood_group,weight,alergies,family_history,surgeries,medication,wardroom_id,p_status) values (' $pname ',' $Gender ',' $Age ',' $Address ',' $phoneno ',' $did ',' $addate ',' $bgroup ',' $Weight ',' $allergy ',' $famhis ',' $surgery ',' $med','$wrid','Admitted')";
$sql2 ="UPDATE ward_room SET wr_status='Occupied' WHERE wardroom_id='$wrid'";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql2)) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
?>
<script type="text/javascript">
    window.location="patient.php";
</script>
</body>
</html>