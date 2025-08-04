<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Add Staff - Arogya</title>
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
    <form action="savestaff.php" method="post" name="f2" onsubmit = "return validation()" >
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
            <input class="form-control" type="text" id="Sname" name="Sname" placeholder="Staff Name..">
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
          <input class="form-control" type="text" id="address" name="address" placeholder="Address..">
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
            <input class="form-control" type="number" id="Sphoneno" name="Sphoneno" placeholder="Phone Number..">
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
            <input  type="Radio" id="male" name="gender" value="male" />Male
            <input  type="Radio"  id="female"  name="gender" value="female"/>Female
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
            
          <?php
include('config.php');  
$result=mysqli_query($conn,"SELECT * from room");
?>
<select id="rid" name="rid" >
  <option>---Room Type---</option>
  <?php while ($row=mysqli_fetch_array($result)){ 
    echo"<option value=$row[room_id]> $row[room_type] </option>";
   } 
   mysqli_close($conn);
   ?>
</select>
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
          </div>
          <div class="col-md-6"></div>
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
                        </button></a>
        </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
          </div>
        </div>
   
<button type="submit" class="btn btn-success" style="font-size:18px;padding-left:50px;padding-right:50px;color:black;border:2px solid black;">Save</button>
        
    <a href="staff.php">
      <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a>   
        
       
        </form>

        <script>  
            function validation()  
            {  
              var nm=document.f2.Sname.value;  
              var ad=document.f2.address.value;  
              var pn=document.f2.Sphoneno.value;  
              var g=document.f2.gender.value;  
              var rid=document.f2.rid.value;  

                if(nm.length=="" | ad.length=="" | pn.length=="" | g.length=="" | rid.length=="") {  
                    alert("Fields cannot be empty. Please fill all the fields!!");  
                    return false;  
                }                  
            }  
        </script>  

</body>
<footer style="padding:0px; margin:20px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html>