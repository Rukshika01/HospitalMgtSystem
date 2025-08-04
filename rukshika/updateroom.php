<?php
include('config.php');  
$id=$_GET["id"];
$rt='';
$result=mysqli_query($conn,"SELECT * from room where room_id='$id'");
while($row = $result->fetch_assoc()){
    $rt=$row["room_type"];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Update patient - Arogya</title>
</head>
<body>
    <div class="row"> 
          <div class="col-md-2"> 
          <a href="dashboard.html">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                       DASHBOARD
                      </button><br></a><br>
                <a href="patient.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        PATIENT
                       </button></a><br><br>
                <a href="doctor.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        DOCTOR
                       </button></a><br><br>
                <a href="room.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        ROOM
                       </button></a><br><br>
                <a href="staff.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        STAFF
                       </button></a><br><br>
                <a href="invoice.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        INVOICE
                       </button></a><br><br>
                <a href="wardroom.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        WARDROOM
                        </button></a><br><br>
                <a href="LoginPage.html">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        LOGOUT
                        </button></a><br><br>
                  </div>

          <div class="col-md-4">
            <form action="" method="POST" name="">
                <label for="Patient ID">Room ID</label>
                    <input class="form-control" type="text"  name="id" placeholder="Room ID.." value="<?php echo $id; ?>" required>


                <label for="Patient ID">Room Type</label>
                    <input class="form-control" type="text"  name="p_type" placeholder="Room Type.." value="<?php echo $rt; ?>" required><br>
                <button type="submit" name="update" class="btn btn-warning btn-block" style="color:black;border:2px solid black;">Update</button><br>
    
                <div style="text-align:right;">
                <a href="room.php">
                <button type="button" class="btn btn-primary" style="color:black;border:2px solid black;" >Back</button>  </a>     
            </form>
      </div>
 </div>   
</body>
<?php
if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE room set room_type='$_POST[p_type]'WHERE room_id='$_POST[id]'");
?>
<script type="text/javascript">
    window.location="room.php";
</script>
<?php
}
?>
</html>