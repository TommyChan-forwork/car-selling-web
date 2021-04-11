<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Image</title>
</head>
<style>
.button {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover {
  background-color: #555555;
  color: white;
}
</style>
<body>
<?php
include '../connection.php';
$query = "SELECT * FROM image";
$result = mysqli_query($conn, $query)
        or die("Illegal query");
$rows = mysqli_num_rows($result);
for ($i = 0; $i < $rows; ++$i) {
    $row = mysqli_fetch_row($result);
    $imgpath = $row["1"];
    echo "<img src='$imgpath' width='320' height='180'> <br>";
}
?>
<br>
<button class="button" onclick="window.location.href='index.php'">Go back</button>
</body>
</html>