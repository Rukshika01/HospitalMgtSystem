<?php
if(isset($_POST['find'])) //search button 
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `patient` WHERE CONCAT(`patient_id`, `patient_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);    
}
else {
    $query = "SELECT * FROM `patient`";
    $search_result = filterTable($query);
}
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "arogya");
    $filter_Result = $connect->query($query);
    return $filter_Result;
} 
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
    <title>Patient - Arogya</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
    <form action="patient.php" method="post">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <input type="search" placeholder="Search by Patient name/ID" style="background-color:#d4dcde;color:black;border:2px solid black;padding-right:130px;" placeholder="Search.." id="valueToSearch" name="valueToSearch"/>
                <button type="submit" class="btn btn-primary"  style="background-color:grey;color:black;border:2px solid black;" name="find" value="Search">search</button> 
            </div> 
            <div class="col-md-2"> 
                <a href="addpatient.php">
                    <br><br><button type="button" class="btn btn-success btn-block" style="background-color:#efdfdf;color:black;border:2px solid black;">ADD NEW PATIENT</button></a>
            </div>
        </div>
    </form>
  
        <div class="row" style="padding-top:10px;"> 
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

            <div class="col-md-8">
                <form action="updatepatient.php" method="post">
                    <table id="editable_table"class="table table-bordered table-condensed table-striped">
                        <thead>   
                            <tr>
                                <th>Patient ID</th>
                                <th>Patient Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone No</th>
                                <th>Doctor ID</th>
                                <th>Admitted date</th>
                                <th>Blood Group</th>
                                <th>Weight</th>
                                <th>Allergies</th>
                                <th>Family History</th>
                                <th>Surgeries</th>
                                <th>Medication</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                            <?php
                    // LOOP TILL END OF DATA
                            while($row=$search_result->fetch_assoc())
                            {
                
                                echo"<tr>";
                                echo"<td>"; echo $row['patient_id'];echo"</td>";
                                echo"<td>";  echo $row['patient_name'];echo"</td>";
                                echo"<td>";  echo $row['gender'];echo"</td>";
                                echo"<td>";  echo $row['age'];echo"</td>";
                                echo"<td>";  echo $row['address'];echo"</td>";
                                echo"<td>";  echo $row['phone_no'];echo"</td>";
                                echo"<td>";  echo $row['doctor_id'];echo"</td>";
                                echo"<td>";  echo $row['admitted_date'];echo"</td>";
                                echo"<td>";  echo $row['blood_group'];echo"</td>";
                                echo"<td>";  echo $row['weight'];echo"</td>";
                                echo"<td>";  echo $row['alergies'];echo"</td>";
                                echo"<td>";  echo $row['family_history'];echo"</td>";
                                echo"<td>";  echo $row['surgeries'];echo"</td>";
                                echo"<td>";  echo $row['medication'];echo"</td>";
                                echo"<td>"; ?> <a href="deletepatient.php?id=<?php echo $row["patient_id"]; ?>"><button type='button' class="btn btn-danger" >Delete</button></a> <?php echo "</td>";  
                                echo"<td>"; ?> <a href="updatepatient.php?id=<?php echo $row["patient_id"]; ?>"><button type='button' class="btn btn-warning" >Edit</button></a> <?php echo "</td>";              
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>  
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html> 
