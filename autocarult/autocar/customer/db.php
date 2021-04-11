<?php
$db_name = "itp4922_db";
$host = "localhost";
$db_user = "root";
$db_password = "";
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$conn) {
	echo ("<p>Unable to connect to database server.</p>");
	exit();
}
?>