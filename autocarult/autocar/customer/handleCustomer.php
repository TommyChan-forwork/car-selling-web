<?php
// 1. include db.php to obtain the connection
// 2. use obtain all the variable 
// 3. define the insert sql
// 4. execute the query by using mysqli_query 
// 5. close connection
// 6. output the result

include 'db.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$custid = test_input($_POST["custid"]);
$name = test_input($_POST["name"]);
$gender = test_input($_POST["gender"]);
$email = test_input($_POST["email"]);
$level = test_input($_POST["level"]);
 
$tableName = "customer";

$sql = "insert into $tableName values  ("
        . " '" . $custid . "', "
        . " '" . $name . "', "
        . " '" . $gender . "', "
        . " '" . $email . "',"
        . " '" . $level . "'"
        . ")";

//print("The query is:<br>$query<p>\n");

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
        print("The Customer added !<br>\n");
    } else {
        print("The query could not be executed!<br>\n" . mysqli_error($conn));
	  }
    ?>
    <a href="listCustomers.php"> List Customer </a>
</body>
</html>
