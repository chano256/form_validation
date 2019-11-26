<?php require_once("src/include/session.php"); ?>
<?php require_once("src/include/db.php"); ?>
<?php require_once("src/include/functions.php"); ?>
<?php require_once("src/include/validation.php"); ?>

<?php confirm_logged_in(); ?>

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
                	<a class="nav-link" href="logout.php">Logout</a>
              	</li>
            </ul>
          </div>
    </nav>
	
	<!--  
	<div>
		<p class="bg-black">
			You are currently logged in to my basic page. 
			You can try other features like sessions, sql injections to ensure security of the form validation
		</p>
	</div>
	
	<div id="mycarousel" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="mycarousel" data-slide-to="1"></li>
            <li data-target="mycarousel" data-slide-to="2"></li>
          </ul>
        
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="src/images/1.jpeg" alt="github.com/chano256">
            </div>
            <div class="carousel-item">
              <img src="src/images/2.jpeg" alt="Shanghai">
            </div>
            <div class="carousel-item">
              <img src="src/images/3.jpeg" alt="Beijing">
            </div>
          </div>
        
          <a class="carousel-control-prev" href="#mycarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#mycarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

	</div>
 	-->
	<div class="products">
      	<div class="container">
        	<div class="row align-items-start">
          		<div class="col">
        				<div class="card" style="width: 18rem;">   
        					<img class="card-img-top" src="src/images/1.jpeg" height="300px">   
        				<div class="card-body">  
        					<h5 class="card-title">Image 1</h5>
            				<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>
          						<a href="#" class="btn btn-primary">Select</a>   
          				</div> 
          				</div>
           		</div>
        			
        		<div class="col">
       				<div class="card" style="width: 18rem;">   
       					<img class="card-img-top" src="src/images/2.jpeg" height="300px">   
       					<div class="card-body">     
       					<h5 class="card-title">Image 2</h5>        
       					<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>
       				<a href="#" class="btn btn-primary">Select</a>   </div> 
       				</div>
      
         		</div>
        
        		<div class="col">
        				<div class="card" style="width: 18rem;">   
        					<img class="card-img-top" src="src/images/3.jpeg" height="300px">   
        					<div class="card-body">     
        					<h5 class="card-title">Image 3</h5>   
        				<p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>     
        			<a href="#" class="btn btn-primary">Select</a>   </div> </div>
            	</div>
        	</div>
    	</div>
	</div>
        		
    <footer class="footer">
			<p>All Rights Reserverd | 2018 &copy; | Term and conditions</p>
	</footer>
<?php include 'src/include/footer.php'?>