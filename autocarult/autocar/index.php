<!DOCTYPE >
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
						<a class="nav-link" href="edit.php">Edit</a>
					  <?php
                          
                       }else{
                          ?>
                       
                      <?php
                         }
                        ?>
                          
					   </li>
					   <li class="nav-item">
						<a class="nav-link" href="animation/sellacar.php">Sell my car</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="animation/aboutus.php">About us</a>
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
					  
					 
                        </li>
                        <?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                      ?>
                         	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 <b><?php echo "HI! ".$user?></b>
							</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            	<a class="dropdown-item" href="purchaseorder.php">purchase order</a>
							
							<a class="dropdown-item" href="sellorder.php">sell order</a>
							<a class="dropdown-item" href="appointment.php">appointment</a>
							<div class="dropdown-divider"></div>
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
			
			<div class="jumbotron">
				<div class='container'>
					<div class='row'>
						<div class='col-md-12'>
							<h1 class="display-4">The Largest Buy / Sell Car Online Retail Outlet</h1>
							<p class="lead">New Car !! Why Not? Check it out!!</p>
							<a class="btn btn-primary btn-lg" href="	buyacar/newcar.php" role="button">Buy New Car</a>
						</div>
					</div>
				</div>
		</div>
			
		<section id='newcar'>
       
		<div class="container">
		        <div class='row'>
					  <div class='col-md-12 text-center'>
					  	<h3 style = "margin-bottom:15vh;margin-top:5vh;">New Car</h3>
                          <div class='row'>
                          <?php

    include 'connection.php';
$query3 = "SELECT * FROM  carinventory where Brandnew ='yes' limit 3"  ;
$result = mysqli_query ($conn, $query3);     

?>
<?php  

 
 $rows = mysqli_num_rows($result);  
 for ($i = 0; $i < $rows; ++$i){ ?>


					  	
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  
									  	<div class='upper'>
											
											<div class='innertext'>



          <?php  
$row = mysqli_fetch_row($result);
			$carname=$row['2'];
			$price=$row['9'];
            $img=$row['13'];
			echo "<img src='$img' height ='250' width='350'><br> ";	
			echo ("<p> $carname</p>"); 
			echo("<p><i class='fas fa-dollar-sign' style='color:#f05f5c'> $price </p></i>")
            
           
            ?></div>
         </div>
         <div class='lower'>
              <a class="btn btn-primary btn-lg" href="car/<?php
     
     $modelstring=$row['0'];
	 echo ($modelstring);
	 
     
     
     
     ?>.php" role="button">Detail</a>
    </div><br>
                                    
					  </div><br>
			    </div>
	        
            <?php  }  ?>


            </div>
            </div>
            </div>
            </div>
				<div class='col-md-12 text-center'>
				<a class="btn btn-primary btn-lg" href="animation/newcarshowroom.php" role="button" style="margin-bottom: 5vh;">Find more new car</a>
				</div>
        </section>


        <section id='bestbuy'>
	        
	        <div class="container">
		        <div class='row'>
					  <div class='col-md-12 text-center'>
					  	<h3 style = "margin-bottom:15vh;margin-top:5vh;">Best buy</h3>
                          <div class='row'>
                          <?php

    include 'connection.php';
$query2 = "SELECT * FROM `carinventory` ORDER BY `carinventory`.`soldquanity` DESC  "  ;
$result2 = mysqli_query ($conn, $query2	);     

?>
<?php   $rows = mysqli_num_rows($result);  
 for ($i = 0; $i < $rows; ++$i){ ?>


					  	
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  
									  	<div class='upper'>
											
											<div class='innertext'>



		  <?php  
		  $row2 = mysqli_fetch_row($result2);
$carname=$row2['2'];
$price=$row2['9'];
$img=$row2['13'];
     echo "<img src='$img' width='350'><br> ";	
echo ("<p> $carname</p>"); 
echo("<p><i class='fas fa-dollar-sign' style='color:#f05f5c'> $price </p></i>");



?></div>
</div>
<div class='lower'>
  <a class="btn btn-primary btn-lg" href="car/<?php

$modelstring=$row['0'];
echo ($modelstring);
     
     
     
     ?>.php" role="button">Detail</a>
    </div><br>
                                    
					  </div><br>
			    </div>
	        
            <?php    }  ?>


            </div>
            </div>
            </div>
			<div class='col-md-12 text-center'>
			<a class="btn btn-primary btn-lg" href="animation/bestbuy.php" role="button">Find more best buy car</a>
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