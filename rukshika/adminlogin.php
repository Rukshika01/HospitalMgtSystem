<?php
include('config.php');   
// SQL query to select data from database
$sql = " SELECT staff.staff_id, staff.staff_name,staff.s_address,staff.s_phone_no,staff.s_gender,room.room_type FROM staff INNER JOIN room on staff.room_id=room.room_id";
$result = $conn->query($sql);
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
    <title>Admin login</title>
    <style>
    body{
        text-align: center;
        background-image: url('image/image4.jpg');}
    td{
        font-size:15px;}
    tr{
        font-size:15px;}       
    </style>
</head>
<body>
<a href="firstpage.html">
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
               HOMEPAGE
              </button><br></a><br>
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
            while($row=$result->fetch_assoc())
            {
                echo"<tr>";
                echo"<td>"; echo $row['staff_id'];echo"</td>";
                echo"<td>";  echo $row['staff_name'];echo"</td>";
                echo"<td>";  echo $row['s_address'];echo"</td>";
                echo"<td>";  echo $row['s_phone_no'];echo"</td>";
                echo"<td>";  echo $row['s_gender'];echo"</td>";
                echo"<td>";  echo $row['room_type'];echo"</td>";
                echo"<td>"; ?> <a href="assignlogin.php?id=<?php echo $row["staff_id"]; ?>"><button type='button' class="btn btn-primary" >Assign Login</button></a> <?php echo "</td>";                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br><br>  <a href="admin.html">
        <button type="button" class="btn btn-primary btn-sm" style="font-size:15px;padding-left:25px;padding-right:25px;color:black;border:2px solid black;">Back<button></a>
</body>
</html>