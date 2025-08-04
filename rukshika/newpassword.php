<?php
include('config.php');
$username = $_POST['id'];  
$opassword = $_POST['oldpass'];
$npassword = $_POST['newpass'];  
      
//to prevent from mysqli injection  
$username = stripcslashes($username);  
$password = stripcslashes($password); 

$username = mysqli_real_escape_string($conn, $username);  
$opassword = mysqli_real_escape_string($conn, $opassword);  
$npassword = mysqli_real_escape_string($conn, $npassword);  
      
$sql = "UPDATE login SET password ='$npassword' WHERE staff_id =$username AND password ='$opassword'";  
         
 if (mysqli_query($conn, $sql)) {
  echo "updated successfully";
  header("location: loginPage.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  
?>  