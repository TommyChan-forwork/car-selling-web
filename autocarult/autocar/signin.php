<!DOCTYPE html>
<html lang="en">
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
					
                        
                        
                        	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Car Catelog
							</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            	<a class="dropdown-item" href="animation/carcatelog.php">Car Catelog</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="animation/carreview.php">Car review</a>
					
							  <a class="dropdown-item" href="animation/newcarshowroom.php">New car show room</a>
							  <a class="dropdown-item" href="animation/bestbuy.php">Best Buy</a>
							  



							  
					
                        
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
						<a class="nav-link" href="signin.php">test</a>
					  <?php
                          
                       }else{
                          ?>
                       
                      <?php
                         }
                        ?>
                          
					   </li>
					   <li class="nav-item">
						<a class="nav-link" href="sellacar.php">Sell my car</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="aboutus.php">About us</a>
					  </li>	
					  <?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
                        
                      ?>
					   <li class="nav-item">
						<a class="nav-link" href="signup.php">Register</a>
					  <?php
                          
                       }else{
                          ?>
                       
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
					  	<li class="nav-item">
						<a  class="nav-link" href="logout.php">logout</a>
                            <?php
                        
                     
             
                      }else{
                        
                      }
                          ?>
                        </li>
                        <?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
					  	<li class="nav-item">
						<a  class="nav-link" ><b><?php echo "HI! ".$user?></b></a>
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
      		
		  <div class="container">
		  <div class='row'>
                <div class='col-md-12 text-center' style="margin-top: 20vh;  ">
                
					  <center>
        <form name="login" method="post" action="signinhandler.php">
        
<table>
  <tr>
	<td><p>Customer ID</p></td>
	<td><input type="text" name="userid"></td></tr>
  <tr>
	<td><p>Password</p></td>
	<td><input type="password" name="password"><td></tr>
  <tr>
	<td><input type="submit" name="submit" value="Submit"></td></tr>
     </table>
                          </form>
        </center>
<br><br><br><br><br><br><br>
</div>
</div>
</div>
    
    
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
							<p><a>E-Mail: customerservice@autocarsales.com</a>
					      </p>
					  </div>
		        </div>
	        </div>	        
        
        </footer>
		
		<script src='js/script.js'></script>
	</body>
</html>