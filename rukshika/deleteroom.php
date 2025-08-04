<?php
include('config.php');  
$id=$_GET["id"];
mysqli_query($conn,"delete from room where room_id=$id");
?>
<script type="text/javascript">
    window.location="room.php";
</script>