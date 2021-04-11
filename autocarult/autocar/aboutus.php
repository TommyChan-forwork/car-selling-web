
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

		<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  

  
    <!--The div element for the map -->


	<section id='bestbuy'>
        <div class="container">
		        <div class='row'>
					  <div class='col-md-12 text-center'>
					  	<h3 style = "margin-bottom:15vh;margin-top:5vh;"> About Us</h3>
              <div class='row'>
        <div class='col-md-6 text-center'>
							  	<div class='outer'>
                  <h4 style = "margin-bottom:5vh;">Location : </h4> <p style = "margin-bottom:5vh;"> Kodak House II, 321 Java Road, North Point, Hong Kong</p>
				  <h4 style = "margin-bottom:5vh;">Business Hours : </h4> <p style = "margin-bottom:5vh;"> Weekday Business hour </p> <p style = "margin-bottom:5vh;"> 11:00  -  21:00 </p>  <p style = "margin-bottom:5vh;"> Weekday Business hour </p> <p style = "margin-bottom:5vh;"> 11:00  -  19:00 </p>
				  
				  <h4 style = "margin-bottom:5vh;">Email : </h4> <p style = "margin-bottom:5vh;">customerservice@autocarsales.com</p>
				  <h4 style = "margin-bottom:5vh;">Hotline : </h4> <p style = "margin-bottom:5vh;"> (852) 2618-4979</p>
									
									  
								  	</a>
							  	</div>
						  	</div>						
					  	

          <div class='col-md-6 text-center'>
					
		  <div id="map" style = "margin-bottom:15vh;margin-top:10vh;"></div>
	
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 22.292674, lng: 114.206919};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 19, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPcs3O44w42wMfpt_Oagc6c9mx01_sZg&callback=initMap">
    </script>						
											
									  	
								  	</a>
							  	</div>
						  				
					  	</div>
					  </div>
			    <div>
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


