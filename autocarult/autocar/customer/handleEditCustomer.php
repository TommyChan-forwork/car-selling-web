<?php include_once 'db.php' ?>
<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<?php
$name = test_input($_POST["name"]);
$gender = test_input($_POST["gender"]);
$email = test_input($_POST["email"]);
$level = test_input($_POST["level"]);
$custid = test_input($_POST["custid"]);

$tableName = "customer";

$sql = " update $tableName "
        . " set  "
        . " name= '" . $name . "', "
        . " gender= '" . $gender . "', "
        . " email='" . $email . "',"
        . " level='" . $level . "'"
        . " where custid= " . $custid . "";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
	if ($result == TRUE) {
		print("The Customer is updated was successfully executed!<br>\n");
    } else {
        print("The query could not be executed!<br>\n" . mysqli_error($conn));
      }
?>
    <a href="listCustomer.php"> List Customers </a>
</body>
</html>
