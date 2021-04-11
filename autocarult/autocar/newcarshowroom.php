
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
<head>
  
   <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link
      href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/68f8681dba.js"
      crossorigin="anonymous"
    ></script>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="style.css" />
    <title>AutoCar New car show room</title>
  
    <meta charset="UTF-8">
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);

        h1 {
            color: black;
        }   
        
html body * {
  box-sizing: border-box;
  font-family: 'Open Sans', Arial, sans-serif;
}
.gridywrap div[class*=gridy] {
  background: #eee;
  box-shadow: inset 0 0 0 1px #ddd;
  padding: 15px; float: left;
  position: relative;
}
.gridywrap .gridy-1,
.gridywrap .gridy-2,
.gridywrap .gridy-3 {width: 320px;
  overflow: hidden;}

.gridywrap .gridy-1 {width: 100%;}
.gridywrap .gridy-2 {width: 100%;}
.gridywrap .gridy-3 {width: 100%;}

.gridywrap .gridyhe-1 {height: 320px;}
.gridywrap .gridyhe-2 {height: 320px;}


@media screen and (min-width: 640px) {
  .gridywrap .gridyhe-2 {height: 320px;}
  .gridywrap {
    width: 100%;
  }
  .gridywrap .gridy-1 {width: 50%;}
  .gridywrap .gridy-2 {width: 50%;}
  .gridywrap .gridy-3 {width: 100%;}
}
@media screen and (min-width: 1024px) {
  .gridywrap .gridy-1 {width: 33.3%;}
  .gridywrap .gridy-2 {width: 66.6%;}
  .gridywrap .gridy-3 {width: 100%;}
  .gridywrap .gridyhe-2 {height: 640px;}
}

/*styling*/
.gridywrap .gridimg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  background-position: center center;
  background-size: cover;
}
.gridywrap .gridimg img {
  width: 100%;
}
.gridywrap .gridinfo {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.4);
  text-align: center;
  transition: all 0.8s;
}
.gridywrap .gridinfo h3 {
  font-size: 24px;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  margin: 130px 0 20px;
  position: relative;
}
.gridywrap .gridinfo h3:after {
  content: '';
  width: 25px;
  border-top: 4px solid #fff;
  display: block;
  margin: 0 auto;
  margin-top: 25px;
}
.gridywrap .gridinfo .gridmeta {
  transition-delay: 0.25s;
}
.gridywrap .gridinfo .gridmeta p {
  display: inline-block;
  font-size: 13px;
  color: #fff;
  margin-bottom: 15px;
}
.gridywrap .gridinfo .gridmeta p i {
  margin-right: 5px;
}
.gridywrap .gridinfo .gridmeta p.gridwho {
  margin-left: 25px;
}
.gridywrap .gridinfo p.gridexerpt {
  width: 60%;
  margin: 0 auto;
  line-height: 22px;
  margin-bottom: 25px;
  color: #fff;
  transition-delay: 0.5s;
}

.gridywrap .gridinfo * {
  opacity: 0;
  transition: all 0.8s;
}
.gridywrap .gridinfo h3 {
  opacity: 1;
}
.gridywrap .gridinfo .grid-btn {
  color: #fff;
  text-decoration: none;
  margin: 0 auto;
  width: 35px;
  height: 35px;
  line-height: 35px;
  border-radius: 25px;
  border: 1px solid #fff; 
  display: block;
  overflow: hidden;
}
.gridywrap .gridinfo .grid-btn:hover {
  width: 75px;
  background: rgba(0,0,0,0.3);
}
.gridywrap .gridinfo .grid-btn span {
  opacity: 0;
  display: none;
  transition: opacity 0.8s;
}
.gridywrap .gridinfo .grid-btn:hover span {
  opacity: 1;
  display: inline;
}
.gridywrap .gridinfo .grid-btn:hover i {
  opacity: 0;
  display: none;
}

.gridywrap .gridinfo:hover * {
  opacity: 0.7;
}
.gridywrap .gridinfo:hover p {
  opacity: 1;
}
.gridywrap .gridinfo:hover {
  background: rgba(158, 12, 73, 0.7);
}
.gridywrap .gridinfo:hover h3 {
  margin-top: 70px;
  opacity: 1;
}

.intro {
  text-align: center;
  padding: 25px;
  background: #FFFFFF;
  color: #ddd;
}
h1 {
  font-size: 48px;
  font-weight: 300;
  padding: 15px 0;
}
.intro p {
  opacity: 0.5;
  font-size: 12px;
}
.intro p a {
  color: #FA8CD3;
}
    </style>
</head>
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
					   <?php
                      if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
                        
                      ?>
					   
					   <?php
                          
                       }else{
                          ?>
                       <li class="nav-item">
						<a class="nav-link" href="animation/sellacar.php">Sell my car</a>
                      <?php
                          
                         }
                        ?>
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
					 <a class="dropdown-item" href="appointment.php">appointment</a>
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

<body>
   <div class='upper'>
                                 

     
                                        
                                                                   <footer>
                                                                   <session id= 'showroom'>
    <div class="intro">
  <h1>The new car show room!</h1>
</div>

<div class="gridywrap">
  <div class="gridy-2 gridyhe-1">
    <div class="gridimg" style="background-image: url(https://www.audi.com.hk/content/dam/nemo/models/q3/q3/my-2019/1920x1080-feature-gallery/1920x1080_Modul4_Feature_Gallery_Pulsorange_v004.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Audi Q3</h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  
  
  <div class="gridy-1 gridyhe-1">
    <div class="gridimg" style="background-image: url(https://cdn01.dcfever.com/media/cars/images/2016/11/mercedesbenz_317_1480323855.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Mercedes-Benz AMG GT S</h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  
  
  <div class="gridy-1 gridyhe-2">
    <div class="gridimg" style="background-image: url(https://audimediacenter-a.akamaihd.net/system/production/media/70272/images/3c92d2acbf6ab5f85be8006f854786f0f0ff36be/A1813681_blog.jpg?1582468430)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Audi May Roll Out RS-Badged</h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  
  
  <div class="gridy-2 gridyhe-1">
    <div class="gridimg" style="background-image: url(https://www.mb.zungfu.com/web/images/mini-site/glc/banner5_2020.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Mercedes-Benz</h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  
  
  <div class="gridy-1 gridyhe-1">
    <div class="gridimg" style="background-image: url(https://gocar2.com/media/newsitem/237/xcla2.jpg.pagespeed.ic.cbTEmEnRl2.jpg)">&nbsp;</div>
    <div class="gridinfo">
      <h3>Mercedes-Benz CLA </h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>

  
  <div class="gridy-1 gridyhe-1">
    <div class="gridimg" style="background-image: url(https://imgs.nmplus.hk/wp-content/uploads/2018/06/mercedes-benz-g-class-stationwagon-w463_wallpaper_03_1920x1200_05-2012_4856539315b17a2ccbef88.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Mercedes-Benz G63 AMG </h3>
      <p class="gridexerpt">Welcome to  show car room!</p>
      <a href="http://localhost/autocarult/autocar/carcatelog.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
</div>

</session>

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
                            <p> E-Mail: customerservice@autocarsales.com
                          </p>
                      </div>
                </div>
            </div>

        </footer>

        <script src='js/script.js'></script>
    </body>

</html>