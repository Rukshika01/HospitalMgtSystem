<?php
include('config.php'); 
// SQL query to select data from database
$sql = "SELECT * FROM room";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Room - Arogya</title>
    <style>
  .col-md-4{
        width:25%;}
        body{
            text-align:center;
        }
        td{
    font-size:15px;
}
tr{
    font-size:15px;
}
    </style>
</head>
<body> 
   
  <div class="row"> 
          <div class="col-md-2"> 
          <a href="dashboard.html">
            <br>
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
          <form action="saveroom.php" method="POST" name="f2" onsubmit = "return validation()">
          <label for="room ID">Room ID</label>
          <input class="form-control" type="text" name="id" placeholder="Room ID..">


          <label for="Patient ID">Patient ID</label>
          <input class="form-control" type="text"  name="p_id" placeholder="Patient ID..">
<br>
    <button type="submit" class="btn btn-success" style="color:black;border:2px solid black;">Save</button>
    </form>
</div>
<div class="col-md-6">
    <form action="updateroom.php" method="post">
    <br>
    <table id="editable_table"class="table table-bordered table-condensed table-striped">
        <thead>   
            <tr>
                <th>Room ID</th>
                <th>Room Type</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
        // LOOP TILL END OF DATA
            while($row=$result->fetch_assoc()){
                echo"<tr>";
                echo"<td>"; echo $row['room_id'];echo"</td>";
                echo"<td>"; echo $row['room_type'];echo"</td>";
                echo"<td>"; ?> <a href="deleteroom.php?id=<?php echo $row["room_id"]; ?>"><button type='button' class="btn btn-danger" >Delete</button></a> <?php echo "</td>";  
                echo"<td>"; ?> <a href="updateroom.php?id=<?php echo $row["room_id"]; ?>"><button type='button' class="btn btn-warning" >Edit</button></a> <?php echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table><br>
        <a href="checkroomavailability.php">
            <button type="button" class="btn btn-success " style="background-color:#efdfdf;color:black;border:2px solid black;">CHECK ROOM ACTIVITY</button></a>
</div>
    </form>
</div> 
        <script>  
            function validation()  
            {  
              var nm=document.f2.id.value;  
              var g=document.f2.p_id.value;  
            
            if(nm.length=="" | g.length=="") {  
                alert("Fields cannot be empty. Please fill all the fields!!");  
                return false;  
            }                  
            }  
        </script>  
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html>