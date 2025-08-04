<?php
include('config.php');   

// SQL query to select data from database
$sql = " SELECT * FROM ward_room";
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
    <title>wardroom</title>
    <style>
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
    <form action="">
        <div class="row"> 
            <div class="col-md-2"><br>
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
            <div class="col-md-4"><br>
            <table id="editable_table"class="table table-bordered table-condensed table-striped">
            <thead>   
            <tr>
                    <th>Ward Room ID</th>
                    <th>Status</th>
                  
                </tr>
    </thead>
    <tbody>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                    // LOOP TILL END OF DATA
                    while($row=$result->fetch_assoc())
                    {
                
                echo"<tr>";
                echo"<td>"; echo $row['wardroom_id'];echo"</td>";
                echo"<td>";  echo $row['wr_status'];echo"</td>";      
               echo "</tr>";
                    }
              ?>
                </tbody>
            </table>
            <a href="wardroom_history.php">
             <button type="button" class="btn btn-primary btn-sm" style="background-color:#efdfdf;color:black;border:2px solid black;">WARDROOM HISTORY</button>  </a>     
            </div>
            <div class="col-md-6"></div>
    </div>

    <div class="row"> 
          <div class="col-md-2"></div>
          <div class="col-md-4">
         
          </div>
          <div class="col-md-6">
         
            
          </div>
            </div>

               
    </form>
</body>
<footer style="padding:0px; margin:0px;background-color: rgba(2, 17, 30, 0.166);text-align:center;">
    <p>&copy; 2022 hospital management system:Rukshika Ratnakumar</p>
</footer>
</html>