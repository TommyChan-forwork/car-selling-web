<?php
include 'db.php';			// connect database

$Login='login';		

$userid=$_POST['userid'];	
$password = ($_POST['password']);
$cpassword= ($_POST['cpassword']);

if (strlen($password) < 5) {	// check length
	echo "<script> {window.alert('Password have to > 5 characters!');location.href='signup.php'} </script>";
    //die ("Password < 5 or > 12 characters");
	exit();
}
if (($password)!=($cpassword)) {	// check length
	echo "<script> {window.alert('Please enter the same password!');location.href='signup.php'} </script>";
    //die ("Password < 5 or > 12 characters");
	exit();
}
$password=md5($password);
	$sql = "INSERT INTO $Login ".
				"(Userid, Password) ".
				"VALUES ('$userid','$password')";
	if (mysqli_query($conn, $sql)) { 
        echo "<script> {window.alert('User created!');location.href='index.php'} </script>";
        
		
	} 	else echo "Insert failed! " .  mysqli_error($conn);

?>
<html>
<body>
<table>
	<tr><td>Customer ID: </td>
	<td><?php echo $userid;?></td></tr>
	<tr><td>Password: </td>
	<td><?php echo $password;?></td></tr>
</table>
</body>
</html>