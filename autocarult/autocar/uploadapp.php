<?php
include 'connection.php';
if(isset($_POST['submit']))
{ 
$name = $_POST['name'];
$price = $_POST['price'];
$id=$_POST['id'];
$buyertime=$_POST['buyerTime'];
     $filename=$_FILES['file']['name'];
   $filetype=$_FILES['file']['type'];
if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
{
move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
$filepath="upload/".$filename;
$sql = "INSERT INTO appointment "."(buyerTime) "."VALUES ($filepath','$buyertime')";
if (mysqli_query($conn, $sql)) { 
         echo "<script> alert('Upload Success!!!'); setTimeout(function(){
            window.location.href = 'sellacar.php';
         }, 0);  </script>";
    }     else{  echo "<script> alert('Upload Failed!!!'); setTimeout(function(){
            window.location.href = 'sellcar.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }
}
    }
?>