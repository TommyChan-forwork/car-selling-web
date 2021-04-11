
<?php
    session_start();
@$admin = $_SESSION['adminloggedin']; 
@$login = $_SESSION['loggedin'];
@$user=$_SESSION['username'];
@$logout=$_SESSION['logout'];
@$log=$_SESSION['logout1'];

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

}
else{
  
}
?>
<html>
	
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields 
input[type=text], input[type=password],input[type=int], input[type=file]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
*/
/* Set a style for all buttons */
button {
  background-color: #f05f5c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
	<head>

    <style>
button {
  background-color: #f05f5c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}         
table {
  border-collapse: collapse;
}

table,
th,
td {
  border: 1px solid black;
  margin: 0 auto;
  padding:15px;
}


        </style>

	<head>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
  		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/68f8681dba.js" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>AutoCar</title>
		
	</head>
<body>
     <header>
	        <div class='container'>
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="animation/index.php"><img src='img/logo.jpg' width='155'></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="animation/carcatelog.php">Car catalog</a>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Buy a car
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="animation/buyacar.php">Buy a car</a>
							<div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="buyacar/newcar.php">Buy a new car</a>
							  <a class="dropdown-item" href="buyacar/certifedusedcar.php">Buy a certified used car</a>
							  
							</div>
										<?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
                        
                      ?>
					   <li class="nav-item">
						<a class="nav-link" href="edit.php">Edit</a>
					  <?php
                          
                       }else{
                          ?>
                       
                      <?php
                         }
                        ?>
                  
					   </li>
					   <?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
                        
                      ?>
					   
					   <?php
                          
                       }else{
                          ?>
                       <li class="nav-item">
						<a class="nav-link" href="sellacar.php">Sell my car</a>
                      <?php
                          
                         }
                        ?>
					  </li>
				
					  <li class="nav-item">
						<a class="nav-link" href="aboutus.php">About us</a>
					  
					  </li>
					   
                     <?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true||isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
					   
					  <?php
                          
                       }else{
                          ?>
                       <li class="nav-item">
						<a class="nav-link" href="signup.php">Register</a>
                      <?php
                         }
                        ?>
						</li>
					  
					  
					  	<?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
					  
					  <?php
                          
                       }else{
                          ?>
                        <li class="nav-item">
						<a class="nav-link" href="signin.php">Log in</a>
                      <?php
                         }
                        ?>
                          
					   </li>	
                        <?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
                         	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 <b><?php echo "HI! ".$user?></b>
							</a>
                    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 	<?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == false){
                        
                      ?>
					  <a class="dropdown-item" href="purchaseorder.php">purchase order</a>
					  <?php
                          
                       }else{
                          ?> 
                            	
							<?php
                         }
                        ?>
                        <?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == false){
                        
                      ?>
					  <a class="dropdown-item" href="sellorder.php">sell order</a>
					  <?php
                          
                       }else{
                          ?> 
                            	
							<?php
                         }
                        ?>
							
							<?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == false){
                        
                      ?>
					 <a class="dropdown-item" href="appointment.php">oppiontment</a>
					  <?php
                          
                       }else{
                          ?> 
                            	
							<?php
                         }
                        ?>
                        
							<?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == false){
                        
                      ?>
							
							<div class="dropdown-divider"></div>
						
                    
                    	 <?php
                          
                       }else{
                          ?> 
                            	
                    		 	
							<?php
                         }
                        ?>
                    				
                     <?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
					  <a class="dropdown-item" href="logout.php">Logout</a>
                            <?php
                        
                     
             
                      }else{
                        
                      }
                          ?>
							  
                   

					  	
                            <?php
                        
                     
             
                      }else{
                        
                      }
                          ?>
                        </li>
                        
					</ul>
				  
				  
				  </div>
				</nav>
	        </div>
        </header>
        


        
		<section id='bestbuy'>
			

       

        <?php
include 'db.php';	
$username=$_SESSION['username'];
 $sql = "SELECT * FROM appointment where appointmentID is not null";
  if (  $result = mysqli_query($conn, $sql)){
   if(mysqli_num_rows($result) > 0){
            
    //$result = mysqli_query($conn, $sql);
   //$row = mysqli_fetch_row($result);

   ?>
   <div class='container'>
					<div class='row'>
						<div class='col-md-12'>
   <?php
    echo"<center><h2> Appointment <h2><center>";
   
   
   ?>

   <br><br>
                    </div>
                    </div>
   </div>


   <div class='container'>
					<div class='row'>
						<div class='col-md-12' text-center>
                            
<table id ="product">
<tr>
<th>Appointment id</th>
<th>UserID</th>
<th>Product Name</th>
<th>Date</th>
<th>Time</th>


</tr>
   <?php
  
    $rows = mysqli_num_rows($result);

    for ($i = 1; $i < $rows; ++$i){
  $row = mysqli_fetch_row($result);
       ?>
    <tr>
    
    <td><?php echo $row["0"];
    ?></td>
    <td><?php echo $row["1"];
    ?></td>
    <td><?php echo $row["2"];
    ?></td>
    <td><?php echo $row["3"];
    ?></td>
    
    <td><?php echo$row["4"] ;   
    ?></td>
  
    </tr>

    
  <?php

   }
?>
</table>
<?php } } ?>
</div>
                 </div>
   </div>
  <br><br>
	<div class='col-md-12 text-center'>
    
   
        <a class="btn btn-primary btn-lg;">
        <button onclick="document.getElementById('delete').style.display='block'" style="width:auto;">Delete</button>
        </a>
        </div>
        
        
<div id="delete" class="modal">
  
  <form class="modal-content animate" action="adminappointmenthandler.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('delete').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
      

    <div class="container">
     <center>
      <label for="uname"><b>Delete appointment</b></label>
      <input type="text" placeholder="Enter appointmentId" name="id" required><br>

  
      <button type="submit" name="submit" value="Upload">SAVE</button>
     
    </center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
      
      
    </div>
  </form>
</div>

</div>
        
</section>
	
        <footer>
	        
			<div class="container">
		        <div class='row'>
					  <div class='col-md-4 text-left'>
						<a  href="animation/index.php"><img src='img/logo.jpg' width='155'></a>
						  <p>The best or nothing</p>
					  </div>
					  <div class='col-md-4 text-left'>
						  <h4>Link</h4>
						  <ul>
					      	<li><a href='animation/index.php'>AutoCar</a></li>
							  <li><a href='animation/aboutus.php'>About us</a></li>
							 
						  </ul>
						  <ul>
					      	<li><a href='animation/buyacar.php'>Buy a Car</a></li>
					      	<li><a href='animation/sellacar.php'>Sell a Car</a></li>
						  </ul>						  
					  </div>
					  <div class='col-md-4 text-left'>
						  <h4>About us</h4>
						  <p>Kodak House II, 321 Java Road, North Point, Hong Kong</p>
							<p> Phone: (852) 2618-4979<br></p>
							<p> E-Mail: customerservice@autocarsales.com</a>
					      </p>
					  </div>
		        </div>
	        </div>	        
        
        </footer>
		
		<script src='js/script.js'></script>
	</body>
	
</html>