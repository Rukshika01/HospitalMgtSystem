<?php
include('config.php');  
$id=$_GET["id"];
mysqli_query($conn,"delete from staff where staff_id=$id");
?>

<script type="text/javascript">
    window.location="staff.php";
</script>