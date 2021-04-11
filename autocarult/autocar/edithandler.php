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
$price = $_POST['price'];
$id=$_POST['id'];
$make=$_POST['make'];
$year=$_POST['year'];
$brandnew=$_POST['brandnew'];
$odometer=$_POST['odometer'];
$color=$_POST['color'];
$transmission=$_POST['transmission'];
$fuel=$_POST['fuel'];
$sold=$_POST['sold'];
$soldquanity=$_POST['soldquanity'];
$filename=$_FILES['files']['name'];
$filetype=$_FILES['files']['type'];
    
if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
{
move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
$filepath="upload/".$filename;
}
$sql = "UPDATE carinventory SET Model='$name', price='$price', ID='$id', Make='$make', YearManufactured='$year', BrandNew='$brandnew', Odometer='$odometer', Color='$color', Transmission='$transmission', FuelType='$fuel', isSold='$sold', soldquanity='$soldquanity' , imgupload='$filepath'   WHERE ID='$id'";
if (mysqli_query($conn, $sql)) { 
         echo "<script> alert('Upload Success!!!'); setTimeout(function(){
            window.location.href = 'editcar.php';
         }, 0);  </script>";
    }     else{  echo "<script> alert('Upload Failed!!!'); setTimeout(function(){
            window.location.href = 'editcar.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }

    }
?>