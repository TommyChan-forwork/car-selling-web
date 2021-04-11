<!DOCTYPE html>
<html>  	
<head>
    <title>Retrieving Data from a Database</title>
    <style type="text/css">
        table, th, td {
			border: 1px solid black;
        }
        .even{
            background: #00d0ff;
        }
    </style>
</head> 
<body>
    <table>
		<tr>
        <th>  ID   </th>
        <th>  name  </th>
        <th>  gender  </th>
        <th>  email  </th>
        <th>  level   </th>
		</tr>

<!-- add php code for displaying customer records -->
<?php include_once 'db.php'; ?>
<?php
	// define a variable with name $tablename
    $tableName = "customer";
    // define query for selecting all recrods  in customer tables
    $query = "SELECT custid, name , gender, email, level from $tableName";
    // execute query using mysqli_query
    $result = mysqli_query($conn, $query);
    // define a variable withd  $numOfRecord mysqli_num_rows
    $numOfRecord = mysqli_num_rows($result);
?>
<?php
    if ($numOfRecord <= 0) {
        echo "<tr><td>NO customers found</td> </tr>";
    } else {
        // output data of each row 
			$count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $class = ($count++ % 2 == 0) ? "" : "even";
                echo "<tr  class=\"" . $class . "\" >";
                echo "<td> " . $row["custid"] . "</td>";
                echo "<td> " . $row["name"] . "</td>";
                echo "<td> " . $row["gender"] . "</td>";
				echo "<td> " . $row["email"] . "</td>";
				echo "<td> " . $row["level"] . "</td>";
				echo "<td> <a href=\"editCustomer.php?custid="
                    . $row["custid"] ."\">edit</a> ". "</td>";
                echo "<td> <a href=\"deleteCustomer.php?custid=" 
                    . $row["custid"] ."\">delete</a> ". "</td>";
				echo "</tr>";
            }
        }
    mysqli_close($conn);
?>
	</table>
</body>
</html>



