<?php
include('config.php');   
if(isset($_POST['find']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `staff` WHERE CONCAT(`staff_id`, `staff_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);   
}
else {
    $query = "SELECT * FROM `staff`";
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
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Staff - Arogya</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body> 
<form action="staff.php" method="post" style="text-align:center;">
<div class="row">       
   <div class="col-md-2"></div>

<div class="col-md-8"><br>
    <input type="search" placeholder="Search by Staff name/ID" style="background-color:#d4dcde;color:black;border:2px solid black;padding-right:130px;" placeholder="Search.." id="valueToSearch" name="valueToSearch"/>
    <button type="submit" class="btn btn-primary"  style="background-color:grey;color:black;border:2px solid black;" name="find" value="Search">search</button> 
</div>
<div class="col-md-2"> 
    <a href="addstaff.php"><br><br>
    <button type="button" class="btn btn-success " style="background-color:#efdfdf;color:black;border:2px solid black;">ADD NEW STAFF</button></a>
</div>
</div> 
</form>

<form action="updatestaff.php" method="post">
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
            <div class="col-md-4">
              
            </div>
            <div class="col-md-6"></div>
</div>
        <div class="row"> 
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <table id="editable_table"class="table table-bordered table-condensed table-striped">
                <thead>   
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Staff Address</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Room ID</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                        // LOOP TILL END OF DATA
                    while($row=$search_result->fetch_assoc()){
                    echo"<tr>";
                    echo"<td>"; echo $row['staff_id'];echo"</td>";
                    echo"<td>";  echo $row['staff_name'];echo"</td>";
                    echo"<td>";  echo $row['s_address'];echo"</td>";
                    echo"<td>";  echo $row['s_phone_no'];echo"</td>";
                    echo"<td>";  echo $row['s_gender'];echo"</td>";
                    echo"<td>";  echo $row['room_id'];echo"</td>";
                    echo"<td>"; ?> <a href="deletestaff.php?id=<?php echo $row["staff_id"]; ?>"><button type='button' class="btn btn-danger" >Delete</button></a> <?php echo "</td>";  
                    echo"<td>"; ?> <a href="updatestaff.php?id=<?php echo $row["staff_id"]; ?>"><button type='button' class="btn btn-warning" >Edit</button></a> <?php echo "</td>";             
                    echo "</tr>";
                    }
                    ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-6"></div>
        </div>                    
</form>
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html>