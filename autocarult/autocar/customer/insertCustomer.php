<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>
    <form action="handleCustomer.php" method="post">
        ID:     <input type="number" name="custid"><br>
        Name:   <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Gender:
			<input type="radio" name="gender" value="f" required="required">Female
			<input type="radio" name="gender" value="m" required="required">Male<br>
        Member Level 
            <select name="level">
                <option value="1"> 1</option>
                <option value="2"> 2</option>
                <option value="3"> 3</option>
            </select> 
            <br>
            <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
