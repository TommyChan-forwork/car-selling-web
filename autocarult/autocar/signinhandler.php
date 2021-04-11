<?php
session_start();
include 'db.php';            // database connection string
$Login='login';            // login table
$User= ($_POST['userid']);
$Password= $_POST['password'];
$Password= md5($Password);


$url = "Location: index.php";

    $sql = "SELECT * FROM $Login WHERE Userid = '$User' and Password = '$Password' ";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
        if ($count>0)
        header($url); 
        else echo "<script> {window.alert('Wrong password!');location.href='signin.php'} </script>";





if($count==1){


    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $User;
    $_SESSION['logout']=1;
    $_SESSION['logout1']=1;
    $_SEEEION['logout2']=1;

}
    $_SESSION['customerid'] = $User;
            // redirect to index.php

if($User =='admin'){
    $_SESSION['adminloggedin'] = true;
    $_SESSION['username'] = $User;

}


?>