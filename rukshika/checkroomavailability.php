<?php
include('config.php');   
if(isset($_POST['find']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT room_availability.room_id,room.room_type,room_availability.patient_id,patient.patient_name FROM room_availability INNER JOIN patient on room_availability.patient_id = patient.patient_id INNER JOIN room on room.room_id = room_availability.room_id WHERE CONCAT(`room_type`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}
 else {
    $query = "SELECT room_availability.room_id,room.room_type,room_availability.patient_id,patient.patient_name FROM room_availability INNER JOIN patient on room_availability.patient_id = patient.patient_id INNER JOIN room on room.room_id = room_availability.room_id";
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
    <title>check room Activity</title>
    <style>
td{
    font-size:15px;
}
tr{
    font-size:15px;
}
        </style>
<head>
<body>
<form action="checkroomavailability.php" method="post" style="text-align:right;">
    <input type="search" placeholder="Search by Room Type..." style="background-color:white;color:black;border:2px solid black;padding-right:130px;" placeholder="Search.." id="valueToSearch" name="valueToSearch"/>
  
    <button type="submit" class="btn btn-primary"  style="background-color:grey;color:black;border:2px solid black;" name="find" value="Search">search</button> 
</form>
    <a href="room.php">
    <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back</button>  </a> 

<form><br>
<table id="editable_table"class="table table-bordered table-condensed table-striped">
    <thead>   
        <tr>
            <th>Room ID</th>
            <th>Room Type</th>
            <th>Patient ID</th>
            <th>Patient Name</th>
        </tr>
    </thead>
    <tbody>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
        <?php
         // LOOP TILL END OF DATA
        while($row=$search_result->fetch_assoc())
        {
            echo"<tr>";
            echo"<td>"; echo $row['room_id'];echo"</td>";
            echo"<td>"; echo $row['room_type'];echo"</td>";      
            echo"<td>"; echo $row['patient_id'];echo"</td>";
            echo"<td>"; echo $row['patient_name'];echo"</td>";     
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</form>
</head>
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);text-align:center;">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html>