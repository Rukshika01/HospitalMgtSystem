<?php
include('config.php');  
$id=$_GET["id"];
mysqli_query($conn,"delete from doctor where doctor_id=$id");
?>

<script type="text/javascript">
    window.location="doctor.php";
</script>
