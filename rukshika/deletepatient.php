<?php
include('config.php');  
$id=$_GET["id"];
mysqli_query($conn,"delete from patient where patient_id=$id");
?>

<script type="text/javascript">
    window.location="patient.php";
</script>
