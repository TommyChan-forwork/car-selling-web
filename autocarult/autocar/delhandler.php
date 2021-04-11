<?php
     $db_name = "autocarsales";
     $host = "localhost";
     $db_user = "root";
     $db_password = "";
     $conn = mysqli_connect ($host, $db_user, $db_password, $db_name);
     if (!$conn) {
         echo  "Failed to connect to MySQL" . mysqli_connect_error();
         exit();
     }
if(isset($_POST['submit']))
{ 
$name = $_POST['name'];

$id=$_POST['id'];

    


$sql = "DELETE FROM carinventory   WHERE ID='$id'";
if (mysqli_query($conn, $sql)) { 
         echo "<script> alert('You have Deleted a car!!!'); setTimeout(function(){
            window.location.href = 'sellacar.php';
         }, 0);  </script>";
    }     else{  echo "<script> alert('delete Failed!!!'); setTimeout(function(){
            window.location.href = 'sellcar.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }
}
    
?>