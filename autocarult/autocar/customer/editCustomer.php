<?php include_once 'db.php'; ?>
<?php
$tableName = "Customer";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<?php
$custid = test_input($_GET["custid"]);
$sql = "SELECT custid, name , gender, email, level from $tableName "
        . "where custid =$custid";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


    $row = mysqli_fetch_assoc($result);
    $custid = $row["custid"];
    $name = $row["name"];
    $gender = $row["gender"];
    $email = $row["email"];
    $level = $row["level"];
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="handleEditCustomer.php" method="post">
        <input type="hidden" name="custid" value="<?= $custid ?>" />
        Name: <input type="text" name="name" value="<?= $name ?>"><br>
        E-mail: <input type="text" name="email" value="<?= $email ?>"><br>
        Gender:
        <input type="radio" name="gender" value="f" 
			<?= $gender == 'f' ? "checked" : "" ?> required="required">Female
        <input type="radio" name="gender" value="m" 
            <?= $gender == 'm' ? "checked=checked" : "" ?> required="required">Male<br>
        Member Level 
            <select name="level">
                <option value="1" <?= $level == '1' ? "selected" : "" ?> > 1</option>
                <option value="2" <?= $level == '2' ? "selected" : "" ?>> 2</option>
                <option value="3"<?= $level == '3' ? "selected" : "" ?>> 3</option>
            </select> 
            <br>
        <input type="submit" name="submit" value="Submit!">
    </form>
</body>
</html>
