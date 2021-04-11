<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>
   
    <?php
    session_start();
   
    
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $log=0;
    $_SESSION['adminloggedin'] = false;	
    $_SESSION['loggedin'] = false;		
     }
if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    $log=0;
    $_SESSION['loggedin'] = false;
    $_SESSION['adminloggedin'] = false;		
     } 
     $url = "Location: index.php";
    header($url);
    ?>
    
</body>
</html>