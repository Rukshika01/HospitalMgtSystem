<?php
include('config.php'); 
// // SQL query to select data from database
// $sql = " SELECT patient.patient_name,patient.patient_id,patient.admitted_date,doctor.doctor_name,doctor.specialist,room.room_type FROM patient INNER JOIN doctor on patient.doctor_id = doctor.doctor_id INNER JOIN room";
// $result = $conn->query($sql);

if(isset($_REQUEST['msg'])){
    $msg = ($_REQUEST['msg']);
    echo "<script>alert('$msg')</script>";
}


if(isset($_POST['find']))
{
    // echo "hi";
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT patient.patient_name,patient.patient_id,patient.admitted_date,doctor.doctor_name,doctor.specialist,room_availability.room_id,room.room_type FROM patient INNER JOIN doctor on patient.doctor_id = doctor.doctor_id INNER JOIN room_availability on room_availability.patient_id = patient.patient_id INNER JOIN room on room_availability.room_id = room.room_id WHERE CONCAT(`patient_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    // echo "not";
    $query = "SELECT patient.patient_name,patient.patient_id,patient.admitted_date,doctor.doctor_name,doctor.specialist,room_availability.room_id,room.room_type FROM patient INNER JOIN doctor on patient.doctor_id = doctor.doctor_id INNER JOIN room_availability on room_availability.patient_id = patient.patient_id INNER JOIN room on room_availability.room_id = room.room_id";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "arogya");
    $filter_Result = $connect->query($query);
    return $filter_Result;
} 
// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.4.1-dist/js/bootstrap.min.js" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Invoice - Arogya</title>
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
<form action="invoice.php" method="post">
<input type="search" placeholder="Search by Patient name" style="background-color:#d4dcde;color:black;border:2px solid black;padding-right:130px;margin-left:420px;" placeholder="Search.." id="valueToSearch" name="valueToSearch"/>
  
    <button type="submit" class="btn btn-primary"  style="background-color:grey;color:black;border:2px solid black;" name="find" value="Search">search</button> 
    
</form>

<form action="saveinvoice.php" method="post"  name="f2" onsubmit = "return validation()">
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
<label for="Patient ID">Patient ID</label>
<?php
include('config.php');  
$result=mysqli_query($conn,"SELECT DISTINCT * from patient");
?>
<select id="p_id" name="p_id" >
  <option>---Patient ID----</option>
  <?php while ($row=mysqli_fetch_array($result)){ 
    echo"<option value=$row[patient_id]> $row[patient_name] </option>";
   } 
   mysqli_close($conn);
   ?>
</select>

<label for="roomFee">Room Fee</label>
            <input class="form-control" type="number" id="roomFee" name="roomFee" placeholder="Room Fee">

<label for="doctorFee">Doctor Fee</label>
             <input class="form-control" type="number" id="doctorFee" name="doctorFee" placeholder="Doctor Fee">
<label for="date">Date</label>
            <input class="form-control" type="date" id="date" name="date" placeholder="Date"><br><br>
            <button type="submit" class="btn btn-success" style="color:black;border:2px solid black;">Save</button><br><br><br><br>
            <a href="checkinvoice.php">
            <button type="button" class="btn btn-primary btn-sm" style="background-color:#efdfdf;color:black;border:2px solid black;text-align:right;">INVOICE HISTORY</button></a>
            <input type="button" onclick="myPrint('print')" value="print"> 
          </div>

  <div class="col-md-6">
          <table id="editable_table"class="table table-bordered table-condensed table-striped">
              <thead>   
              <tr>
                      <th>Patient Name</th>
                      <th>Patient ID</th>
                      <th>Doctors Name</th>
                      <th>Specialist</th>
                      <th>Room ID</th>
                      <th>Room Type</th>
                      <th>Admitted Date</th>
                  </tr>
      </thead>
      <tbody>
                  <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                  <?php
                      // LOOP TILL END OF DATA
                      while($row=$search_result->fetch_assoc())
                      {
                  
                  echo"<tr>";
                  echo"<td>"; echo $row['patient_name'];echo"</td>";
                  echo"<td>";  echo $row['patient_id'];echo"</td>";
                  echo"<td>";  echo $row['doctor_name'];echo"</td>";
                  echo"<td>";  echo $row['specialist'];echo"</td>";
                  echo"<td>";  echo $row['room_id'];echo"</td>";
                  echo"<td>";  echo $row['room_type'];echo"</td>";
                  echo"<td>";  echo $row['admitted_date'];echo"</td>";          
                 echo "</tr>";
                      }
                ?>
                  </tbody>
              </table>         
  </div>
        </div>

   
        
        <a href="checkinvoice.php">
        
        <!-- <button class="btn btn-primary  onclick="printPageArea(elementID)"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button> -->
        <!-- <span class="glyphicon glyphicon-print" aria-hidden="true"> <input type="button" hidden="print" value="Print" class="btn btn-primary" onclick="codespeedy()"></span>   -->
      
                    </form>
        <script>
        
        // function codespeedy(){
//       var print_div = document.getElementById("print");
// var print_area = window.open();
//  print_area.document.write(print_div.innerHTML);

//             print_area.print();
//             print_area.close();

    //     var username = document.f2.print.value;
    //     alert(username);
    
    // }

        function validation()  
            {  
              var pid=document.f2.p_id.value;  
              var rof=document.f2.roomfee.value;  
              var dof=document.f2.doctorfee.value;  
              var d=document.f2.date.value;  
              
                if(pid.length=="" | rof.length=="" | dof.length=="" | d.length=="") {  
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