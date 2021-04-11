<?php
include 'db.php';
if(isset($_POST['submit']))
{ 
$username = $_POST['username'];
$carname = $_POST['carname'];
$price=$_POST['price'];
$img= $_POST['img'];
$sql = "INSERT INTO purchaseorder "."(userId,model,price,imgupload) "."VALUES ('$username','$carname','$price','$img')";
if (mysqli_query($conn, $sql)) { 
		 echo "<script> alert('Add to purchase cart Success!!!'); setTimeout(function(){
            window.location.href = 'buyacar.php';
         }, 0);  </script>";
	} 	else{  echo "<script> alert('Failed to add to purchase cart!!!'); setTimeout(function(){
            window.location.href = 'buyacar.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }
}
?>