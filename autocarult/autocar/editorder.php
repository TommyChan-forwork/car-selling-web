<?php
include 'db.php';	
if(isset($_GET['delete'])){

$id=$_GET['delete'];
 $sql = "delete from carinventory where id = $id ";
  $result = mysqli_query($conn, $sql)
            or die("Illegal query");
if (mysqli_query($conn, $sql)) { 
		 echo "<script> alert('Delete Success !!'); setTimeout(function(){
            window.location.href = 'sellorder.php';
         }, 0);  </script>";
	} 	else{  echo "<script> alert('Delete Failed !!'); setTimeout(function(){
            window.location.href = 'sellorder.php';
         }, 0);  </script>" .  mysqli_error($conn);

    }

}


?>