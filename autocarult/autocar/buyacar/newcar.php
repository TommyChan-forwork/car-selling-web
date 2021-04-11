<!DOCTYPE html>

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
	echo "<script> {window.alert('Please login first!');location.href='../signin.php'} </script>";
}
?>
<html>
	
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
		
			
		<link rel="stylesheet" type="text/css" href="../style.css">
		<title>AutoCar</title>
		
	</head>
	
	<body>
        
        
		
        <header>
	        <div class='container'>
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="../animation/index.php"><img src='../img/logo.jpg' width='155'></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../animation/carcatelog.php">Car catalog</a>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Buy a car
							</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="../animation/buyacar.php">Buy a car</a>
							<div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="newcar.php">Buy a new car</a>
							  <a class="dropdown-item" href="certifedusedcar.php">Buy a certified used car</a>
							  
							</div>
					  <li class="nav-item">
						<a class="nav-link" href="../animation/sellacar.php">Sell my car</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="../animation/aboutus.php">About us</a>
					  </li>	
					  <li class="nav-item">
						<a class="nav-link" href="../signup.php">Register</a>
					  </li>	
					  <li class="nav-item">
						<a class="nav-link" href="../signin.php">Log in</a>
					  </li>	
					</ul>
				  
				  </div>
				</nav>
            </div>
			</header>
			
        		<section id='intro'>
			
			<div class="jumbotron2">
				<div class='container'>
					<div class='row'>
						<div class='col-md-12'>
              <div class="fade-in">
              <h1 class="display-4">The Largest Buy / Sell Car Online Retail Outlet</h1>
              </div>
              <p class="lead"> Check  out more car catalog!!</p>

							<a class="btn btn-primary btn-lg" href="animation/carcatelog.php" role="button">Car catalog</a>
						</div>
					</div>
				</div>
		</div>
			
		</section>
			<section id='bestbuy'>
	        
       
	        
	        <div class="container">
		        <div class='row'>
					  <div class='col-md-12 text-left'>
					  	<h3 style = "margin-bottom:15vh;margin-top:5vh;">New Car</h3>
                          <div class='row'>
                          <?php

    include '../connection.php';

	$query1 = "SELECT * FROM `carinventory` WHERE BrandNew = 'yes' ORDER BY `carinventory`.`YearManufactured` DESC "  ;

$result1 = mysqli_query ($conn, $query1);     

?>
<?php   $rows = mysqli_num_rows($result1);  
 for ($i = 0; $i < $rows; ++$i){ ?>


					  	
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  
									  	<div class='upper'>

											<div class='innertext'>



          <?php  
$row = mysqli_fetch_row($result1);
			$carname=$row['2'];
			$price=$row['9'];
			$img=$row['13'];
			echo "<img src='../$img' height='250' width='350'><br> ";	
			echo "<p> $carname</p>"; 
			echo"<p><i class='fas fa-dollar-sign'> $price </p></i>";
            
           
            ?></div>
         </div>
         <div class='lower'>
              <a class="btn btn-primary btn-lg" href="../car/<?php
     
     $modelstring=$row['0'];
	 echo ($modelstring);
	 
     

     
	 ?>.php" role="button">Detail</a>
	 </div><br>
									 
					   </div><br>
				 </div>
			 
			 <?php    } 
			 
			 mysqli_free_result($result1);
  
 
 mysqli_close($conn);
			 ?>


            </div>
            </div>
            </div>
            </div>
        </section>


       

		




            <footer>
	        
			<div class="container">
		        <div class='row'>
					  <div class='col-md-4 text-left'>
						<a  href="../animation/index.php"><img src='../img/logo.jpg' width='155'></a>
						  <p>The best or nothing</p>
					  </div>
					  <div class='col-md-4 text-left'>
						  <h4>Link</h4>
						  <ul>
					      	<li><a href='../animation/index.php'>AutoCar</a></li>
							  <li><a href='../animation/aboutus.php'>About us</a></li>
							 
						  </ul>
						  <ul>
					      	<li><a href='../animation/buyacar.php'>Buy a Car</a></li>
					      	<li><a href='../animation/sellacar.php'>Sell a Car</a></li>
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

