<?php
include('config.php');  
$id=$_GET["id"];
$dname='';
$spl='';
$phoneno='';
$day='';

$result=mysqli_query($conn,"select * from doctor where doctor_id=$id");

while($row = $result->fetch_assoc())
{
    $dname=$row["doctor_name"];
    $spl=$row["specialist"];
    $phoneno=$row["d_phone_no"];
    $day=$row["available_days_id"];
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
    <title>Update patient - Arogya</title>
    <style>
       .col-md-6{
        width:25%;}
        body{
            text-align:center;
        }
    </style>
</head>
<body>
  <form action="" method="POST" name="">
    <div class="row">
      <div class="col-md-2">
        <a href="dashboard.html">
          <button type="button" style="margin-top:5px;" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
            DASHBOARD
          </button><br></a><br>
      </div>
      <div class="col-md-4">
        <label for="Dname" style="margin-top:5px;">Doctor's Name</label><br>
      </div>
      <div class="col-md-6">
        <input class="form-control" style="margin-top:5px;" type="text" id="Dname" name="Dname" placeholder="Doctors Name.." value="<?php echo $dname; ?>" required>
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
        <label for="specialist">Specialist</label>
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text" id="specialist" name="specialist"  value="<?php echo $spl; ?>" required>
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
          <label for="Dphoneno">Phone Number</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="number" id="Dphoneno" name="Dphoneno" placeholder="Phone Number.." value="<?php echo $phoneno; ?>" required>
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
          <label for="AD">Available Days</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="ad" name="ad" placeholder="Available Days.." value="<?php echo $day; ?>" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <a href="staff.php">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
            STAFF
            </button></a><br><br>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-6"></div>
      </div>

    <div class="row">
      <div class="col-md-2">
          <a href="invoice.php">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
              INVOICE
            </button></a><br><br>
      </div>
      <div class="col-md-4"> </div>
      <div class="col-md-6"></div>
    </div>

        <div class="row">
        <div class="col-md-2">
        <a href="wardroom.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        WARDROOM
                        </button></a><br><br>
        </div>
          <div class="col-md-4"> </div>
          <div class="col-md-6"></div>
          </div>

          <div class="row">
        <div class="col-md-2">
        <a href="LoginPage.html">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        LOGOUT
                        </button></a>
        </div>
          <div class="col-md-4"> </div>
          <div class="col-md-6"></div>
          </div>

      

<button type="submit" name="update" class="btn btn-warning" style="font-size:18px;padding-left:50px;padding-right:50px;color:black;border:2px solid black;">Update</button>
<a href="doctor.php">
<button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a>   
       
</form>
</body>
<footer style="padding:0px; margin:20px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
<?php
if(isset($_POST["update"]))
{
  mysqli_query($conn,"UPDATE doctor set doctor_name='$_POST[Dname]',specialist='$_POST[specialist]',d_phone_no='$_POST[Dphoneno]',available_days_id='$_POST[ad]'WHERE doctor_id=$id");

  ?>
  <script type="text/javascript">
    window.location="doctor.php";
</script>
  <?php
}
?>
</html>