<?php
include 'db.php';
if(isset($_POST['submit']))
{ 
$appdate = $_POST['appdate'];
$apptime = $_POST['apptime'];
$username = $_POST['username'];
$carname = $_POST['carname'];
$sql = "INSERT INTO appointment "."(userID,appdate,apptime,make) "."VALUES ('$username','$appdate','$apptime','$carname')";
if (mysqli_query($conn, $sql)) { 
		 echo "<script> alert('Appointment Booked Success!!!'); setTimeout(function(){
            window.location.href = 'appointment.php';
         }, 0);  </script>";
	} 	else{  echo "<script> alert('Appointment Failed!!!'); setTimeout(function(){
            window.location.href = 'appoinment.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }
}
?>