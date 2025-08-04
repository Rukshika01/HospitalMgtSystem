<?php
include('config.php');  
$id=$_GET["id"];

$sname='';
$ad='';
$phoneno='';
$gen='';
$rid='';

$result=mysqli_query($conn,"select * from staff where staff_id=$id");

while($row = $result->fetch_assoc())
{
    $sname=$row["staff_name"];
    $ad=$row["s_address"];
    $phoneno=$row["s_phone_no"];
    $gen=$row["s_gender"];
    $rid=$row["room_id"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Update staff - Arogya</title>
    <style>
       .col-md-6{
        width:25%;
      }
      body{
            text-align:center;
        }
    </style>
</head>
<body>
    <form action="" method="POST" name="">
        <div class="row">   
             <div class="col-md-2"><br>
            <a href="dashboard.html">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                       DASHBOARD
                      </button><br></a><br>
        </div>
          <div class="col-md-4"><br>
            <label for="">Staff Name</label><br>
          </div>
          <div class="col-md-6">
            <br>
            <input class="form-control" type="text" id="Sname" name="Sname" placeholder="Staff Name.." value="<?php echo $sname; ?>" required>
          </div>
        </div>
      
        <div class="row">
            <div class="col-md-2">
            <a href="patient.php">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        PATIENT
                       </button></a><br><br>
            </div>
          <div class="col-md-4">
            <label for="">Address</label>
          </div>
          <div class="col-md-6">
          <input class="form-control" type="text" id="address" name="address" placeholder="Address.." value="<?php echo $ad; ?>" required>
              </div>
          </div>
        
      <div class="row">
        <div class="col-md-2">
        <a href="doctor.php">
        <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        DOCTOR
                       </button></a><br><br>
        </div>
          <div class="col-md-4">
            <label for="">Phone Number</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="number" id="Sphoneno" name="Sphoneno" placeholder="Phone Number.." value="<?php echo $phoneno; ?>" required>
          </div>
        </div>
      
        
      <div class="row">
        <div class="col-md-2">
        <a href="room.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        ROOM
                       </button></a><br><br>
        </div>
          <div class="col-md-4">
            <label for="gender">Gender</label>
          </div>
          <div class="col-md-6">
            <input  type="text" id="gender" name="gender" value="<?php echo $gen; ?>" required >
          </div>
        </div>
      
      
      <div class="row">
        <div class="col-md-2">
        <a href="staff.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        STAFF
                       </button></a><br><br>
        </div>
          <div class="col-md-4">
          <label for="">Room Type</label>
          </div>
          <div class="col-md-6">
          <input class="form-control" type="text" id="rid" name="rid" value="<?php echo $rid; ?>" required>
          
        </div>
        
        </div>
    <!-- <input type="submit" value="update"> -->
    
    <div class="row">
        <div class="col-md-2">
        <a href="invoice.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        INVOICE
                       </button></a><br><br>
        </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
          </div>
        </div>

        <div class="row">
        <div class="col-md-2">
        <a href="wardroom.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        WARDROOM
                        </button></a><br><br>
        </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
          </div>
        </div>

      <div class="row">
        <div class="col-md-2">
        <a href="LoginPage.html">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        LOGOUT
                        </button></a><br><br>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        </div>
      </div>

      <button type="submit" name="update" class="btn btn-warning" style="font-size:18px;padding-left:50px;padding-right:50px;color:black;border:2px solid black;">Update</button>
    <a href="staff.php">
      <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a>   
     

 
</form>
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
<?php
if(isset($_POST["update"]))
{
  mysqli_query($conn,"UPDATE staff set staff_name='$_POST[Sname]',s_address='$_POST[address]',s_phone_no='$_POST[Sphoneno]',s_gender='$_POST[gender]',room_id='$_POST[rid]'WHERE staff_id=$id");

  ?>
  <script type="text/javascript">
    window.location="staff.php";
</script>
  <?php
}
?>
</html>