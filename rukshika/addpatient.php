<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Add patient - Arogya</title>
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
  
    <form action="savepatient.php" method="post" name="f2" onsubmit = "return validation()">
        
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
          <input class="form-control" type="text" placeholder="Your Full Name.." id="name" name="name">
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
            <input  type="Radio" id="male" name="gen" value="male" />Male
            <input  type="Radio"  id="female"  name="gen" value="female"/>Female
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
            <input class="form-control" type="text" id="ag" name="ag" placeholder="Your Age..">
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
            <input class="form-control" type="text" id="add" name="add" placeholder="Your Address..">
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
            <input class="form-control" type="number" id="phonen" name="phonen" placeholder="Your Phone Number..">
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
          <?php
          include('config.php');  
          $result=mysqli_query($conn,"SELECT DISTINCT * from doctor");
          ?>
          <select id="docid" name="docid" >
          <option>---Doctor ID----</option>
          <?php while ($row=mysqli_fetch_array($result)){ 
          echo"<option value=$row[doctor_id]> $row[doctor_name] </option>";
          } 
          mysqli_close($conn);
          ?>
          </select>
      </div>
    </div>

      <br>
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
            <input class="form-control" type="date" id="date" name="date">
          </div>
        </div>
      
      <h3><u>Medical History</u></h3>
      <div class="row">
        <div class="col-md-2">
        <a href="LoginPage.html">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
                        LOGOUT
                        </button></a>
        </div>
        <div class="col-md-4">
            <label for="blgroup">Blood Group</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="blgroup" name="blgroup" placeholder="Blood Group..">
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="weight">Weight</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="wei" name="wei" placeholder="Weight..">
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="allergy">Any Allergy</label>
        </div>
        <div class="col-md-6">
                <textarea class="form-control" id="all" name="all"  style="height:100px"></textarea><br>
        </div>
      </div>


      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="famhistory">Family History</label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" id="fam" name="fam" placeholder="Family History..">
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="surgery">Any Past Surgery</label>
        </div>
        <div class="col-md-6">
                <textarea class="form-control" id="sur" name="sur" style="height:100px"></textarea><br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="">Any Medication</label>
        </div>
        <div class="col-md-6" >
          
          <input  type="Radio"  id="yes" name="medication" value="yes"/>Yes
          <input  type="Radio" id="no"  name="medication" value="no"/>No
       
        </div>
    </div>

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <label for="">Ward Room ID</label>
      </div>
      <div class="col-md-6">
        <?php
        include('config.php');  
        $result=mysqli_query($conn,"SELECT wardroom_id from ward_room WHERE wr_status='vacant'");
        ?>
        <select id="wrid" name="wrid" >
          <option>---Available Ward Room's ID----</option>
          <?php while ($row=mysqli_fetch_array($result)){ 
            echo"<option value=$row[wardroom_id]> $row[wardroom_id]</option>";
          } 
          mysqli_close($conn);
          ?>
        </select>
<br><br>
      </div>
    </div>
       
    </form>
      
    <button type="submit" class="btn btn-success" style="font-size:18px;padding-left:50px;padding-right:50px;color:black;border:2px solid black;">Save</button>
    <a href="patient.php">
    <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a>
        <script>  
            function validation()  
            {  
              var nm=document.f2.name.value;  
              var g=document.f2.gen.value;  
              var a=document.f2.ag.value;  
              var adrs=document.f2.add.value;  
              var pn=document.f2.phonen.value;  
              var di=document.f2.docid.value; 
              
              var d=document.f2.date.value;  
              var bg=document.f2.blgroup.value;  
              var w=document.f2.wei.value;  
              var alg=document.f2.all.value;  
              var f=document.f2.fam.value;  
              var s=document.f2.sur.value; 
              var m=document.f2.medication.value; 
              var wrid=document.f2.wrid.value; 

                if(nm.length=="" | g.length=="" | a.length=="" | adrs.length=="" | pn.length=="" | di.length=="" | d.length=="" | bg.length=="" | w.length=="" | alg.length=="" | f.length=="" | s.length=="" | m.length=="" | wrid.length=="") {  
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