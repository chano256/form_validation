<?php require_once("src/include/session.php"); ?>
<?php require_once("src/include/db.php"); ?>
<?php require_once("src/include/functions.php"); ?>
<?php require_once("src/include/validation.php"); ?>

<?php include 'src/include/header.php'?>
    <title>Home</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white navbar fixed-top">
		<a class="navbar-brand text-danger" href="index.php">Securico</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
      		<ul class="navbar-nav">
              	<li class="nav-item">
                	<a class="nav-link" href="index.php">Home</a>
              	</li>
              	<li class="nav-item">
                	<a class="nav-link" href="#">About</a>
              	</li>
              	<li class="nav-item">
                	<a class="nav-link" href="#">Products</a>
              	</li>
				<li class="nav-item">
                	<a class="nav-link" href="#">Contact Us</a>
              	</li>
              	<li class="nav-item">
                	<a class="nav-link" href="src/include/logout.php">Logout</a>
              	</li>
            </ul>
          </div>
    </nav>
	
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
  			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
     		<div class="carousel-item active">
           		<img class="d-block w-100" src="src/images/wonder.jpg" alt="First slide">
      		</div>
    		
    		<div class="carousel-item">
   				<img class="d-block w-100" src="src/images/black.jpg" alt="Second slide">
          	</div>
          	
          	<div class="carousel-item">
     			<img class="d-block w-100" src="src/images/justice.jpg" alt="Third slide">
          	</div>
        	
        	</div>
    			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
          		<span class="sr-only">Previous</span>
        		</a>
        		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          		<span class="carousel-control-next-icon" aria-hidden="true"></span>
          		<span class="sr-only">Next</span>
        		</a>
	</div>
 		
	<div class="movies">
      	<div class="container">
        	<div class="row align-items-start">
          		<div class="col">
        				<div class="card" style="width: 18rem;">   
        					<img class="card-img-top" src="poster1.jpg" alt="Card image cap">   
        				<div class="card-body">  
        					<h5 class="card-title">Wonder Woman</h5>
            				<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>
          						<a href="page.php" class="btn btn-primary">Book Now</a>   
          				</div> 
          				</div>
           		</div>
        			
        		<div class="col">
       				<div class="card" style="width: 18rem;">   
       					<img class="card-img-top" src="poster2.jpg" alt="Card image cap">   
       					<div class="card-body">     
       					<h5 class="card-title">Black Panther</h5>        
       					<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>
       				<a href="page.php" class="btn btn-primary">Book Now</a>   </div> 
       				</div>
      
         		</div>
        
        		<div class="col">
        				<div class="card" style="width: 18rem;">   
        					<img class="card-img-top" src="poster3.jpg" alt="Card image cap">   
        					<div class="card-body">     
        					<h5 class="card-title">Justic League</h5>   
        				<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>     
        			<a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
            	</div>
        	</div>
    	</div>
	</div>
     
        <div class="movies1">      
        	<div class="container">
            	<div class="row align-items-start">
              		<div class="col">
          				<div class="card" style="width: 18rem;">   
          					<img class="card-img-top" src="poster4.jpg" alt="Card image cap">   
          					<div class="card-body">     
          						<h5 class="card-title">World Wor Z 2</h5>   
          						<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>      
          						<a href="page.ph" class="btn btn-primary">Book Now</a>   
          					</div> 
          				</div>
               		</div>
               	
                   	<div class="col">
              			<div class="card" style="width: 18rem;">   
              				<img class="card-img-top" src="poster5.jpg" alt="Card image cap">   
              				<div class="card-body">     
              					<h5 class="card-title">Thor Rangarok</h5> <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>       
              					<a href="page.php" class="btn btn-primary">Book Now</a>   
              				</div> 
              			</div>
                  	</div>
                
                	<div class="col">
         				<div class="card" style="width: 18rem;">   
         					<img class="card-img-top" src="poster6.jpg" alt="Card image cap">   
         					<div class="card-body">     
         						<h5 class="card-title">Star wor The last jedi</h5> 
         						<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>      
         						<a href="page.php" class="btn btn-primary">Book Now</a>   
         					</div> 
         				</div>
        			</div>
        		</div>
       		</div>
      	</div>
      		
      		
    <footer>
			<div>All Rights Reserverd | 2018 &copy; | Term and conditions</div>
	</footer>
<?php include 'src/include/footer.php'?>