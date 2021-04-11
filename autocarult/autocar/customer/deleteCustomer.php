<?php
include_once 'db.php';
include_once 'formValidation.php';
?>

<?php
$tableName = "Customer";

$custid = test_input($_GET["custid"]);
$query = "delete from $tableName "
        . "where custid =$custid";

$result = mysqli_query($conn, $query);

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
    if (!$result) {
		die("Database access failed: " . mysql_error());
    } else {
         echo "The customer record with id =$custid is successfully deleted";
      }
?>
<div>
    <a href="listCustomer.php"> List Customers </a>
</div>
</body>
</html>
