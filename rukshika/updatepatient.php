<?php
include('config.php');  
$id=$_GET["id"];

$pname='';
$gender='';
$age='';
$address='';
$phoneno='';
$did='';
$addate='';
$bgroup='';
$weight='';
$allergy='';
$famhis='';
$surgery='';
$med='';

$result=mysqli_query($conn,"select * from patient where patient_id=$id");

while($row = $result->fetch_assoc())
{
  $pname=$row["patient_name"];
  $gender=$row["gender"];
  $age=$row["age"];
  $address=$row["address"];
  $phoneno=$row["phone_no"];
  $did=$row["doctor_id"];
  $addate=$row["admitted_date"];
  $bgroup=$row["blood_group"];
  $weight=$row["weight"];
  $allergy=$row["alergies"];
  $famhis=$row["family_history"];
  $surgery=$row["surgeries"];
  $med=$row["medication"];        
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
        <h3><u>Personal information</u></h3>
        <div class="col-md-2">
        <a href="dashboard.html">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                       DASHBOARD
                      </button><br></a><br>
        </div>
        <div class="col-md-4">
            <label for="name">Full Name</label><br>
          </div>
          <div class="col-md-6">
          <input class="form-control" type="text"  id="name" name="name" value="<?php echo $pname; ?>" required>
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
            <label for="gender">Gender</label>
          </div>
          <div class="col-md-6">
            <input  type="text" id="male" name="gen" value="<?php echo $gender; ?>" required>
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
            <label for="age">Age</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" id="ag" name="ag" value="<?php echo $age; ?>" required>
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
            <label for="address">Address</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" id="add" name="add"  value="<?php echo $address; ?>" required>
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
            <label for="phoneno">Phone Number</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="number" id="phonen" name="phonen"  value="<?php echo $phoneno; ?>" required>
          </div>
        </div>
        
        <div class="row">
        <div class="col-md-2">
        <a href="invoice.php">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        INVOICE
                       </button></a><br><br>
        </div>
          <div class="col-md-4">
            <label for="dname">Doctor's ID</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="number" id="docid" name="docid" value="<?php echo $did; ?>" required>
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
            <label for="date">Admitted date</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date" id="date" name="date" value="<?php echo $addate; ?>" required>
          </div>
        </div>
      
      <h3><u>Medical History</u></h3>
      <div class="row">
        <div class="col-md-2">
        <a href="LoginPage.html">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        LOGOUT
                        </button></a><br><br>
        </div>
        <div class="col-md-4">
            <label for="blgroup">Blood Group</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="blgroup" name="blgroup" value="<?php echo $bgroup; ?>" required>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="weight">Weight</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="wei" name="wei"  value="<?php echo $weight; ?>" required>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="allergy">Any Allergy</label>
        </div>
        <div class="col-md-6">
               <input type="text" id="all" name="all"  value="<?php echo $allergy; ?>" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="famhistory">Family History</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="fam" name="fam"  value="<?php echo $famhis; ?>" required >
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="surgery">Any Past Surgery</label>
        </div>
        <div class="col-md-6">
                <input type="text" id="sur" name="sur" value="<?php echo $surgery; ?>" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="medication">Any Medication</label>
        </div>
        <div class="col-md-6">
          <input  type="text" id="yes" name="medication" value="<?php echo $med; ?>" required>
        </div>
    </div>

    <button type="submit" name="update" class="btn btn-warning" style="font-size:18px;padding-left:50px;padding-right:50px;color:black;border:2px solid black;">Update</button>
    <a href="patient.php">
    <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a>   
</form>
</body>
<footer style="padding:0px; margin:20px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>

<?php
if(isset($_POST["update"]))
{
  mysqli_query($conn,"UPDATE patient set patient_name='$_POST[name]',gender='$_POST[gen]',age='$_POST[ag]',address='$_POST[add]',phone_no='$_POST[phonen]',doctor_id='$_POST[docid]',admitted_date='$_POST[date]',blood_group='$_POST[blgroup]',weight='$_POST[wei]',alergies='$_POST[all]',family_history='$_POST[fam]',surgeries='$_POST[sur]',medication='$_POST[medication]'WHERE patient_id=$id");

  ?>
  <script type="text/javascript">
    window.location="patient.php";
</script>
  <?php
}
?>
</html>