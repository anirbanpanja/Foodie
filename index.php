<?php

session_start();

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
$con = mysqli_connect('localhost' , 'root');
if($con){
	// echo "Connect is ok";
} else
{
	echo"No ";
}


mysqli_select_db($con, 'foodie');
if(isset($_SESSION["email"])){
$email = $_SESSION["email"];

$q1 = "select name from customer where email= '$email' ";
$data = mysqli_query($con, $q1);

$name = mysqli_fetch_row($data);
}
// echo $name[0];

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to foodies</title>
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<?php include('head.php');?>
</head>
<body>
	<div class="banner">

		<?php include('header.php');?>
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="I would like to eat" required="">
				
						<input type="submit" value="Search">
					</form>
				</div> 
			</div>
		</div>
	</div>

	<div class="add-products">  
		<div class="container">
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="menu.html"> 
						<h4>Get <span>20%<br>Cashback</span></h4>
						<h5>Ordered in mobile app only </h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-right">
					<a href="menu.html"> 
						<h4>GET Upto<span><br>40% Offer</span></h4>
						<h5>Sunday special discount</h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<div class="clearfix"> </div> 
			</div>  	 
		</div>
	</div>
	
	<div class="wthree-order">  
		<img src="images/i2.jpg" class="w3order-img" alt=""/>
		<div class="container">
			<h3 class="w3ls-title">How To Order Online Food</h3>
			<p class="w3lsorder-text">Get your favourite food in 4 simple steps.</p>
			<div class="order-agileinfo">  
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-map" aria-hidden="true"></i> 
						<h5>Search Area</h5>
						<span>1</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-cutlery" aria-hidden="true"></i> 
						<h5>Choose Food</h5>
						<span>2</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h5>Pay Money</h5>
						<span>3</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-truck" aria-hidden="true"></i>
						<h5>Enjoy Food</h5>
						<span>4</span>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
		</div>
	</div>

	<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Special Services</h3>
			<div class="dealsrow">
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Party Orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Team up Scheme</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>corporate orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


	<!-- Carousel -->
	<?php include('Carousel.php');?>
	<!-- //Carousel --> 
<!-- footer -->
 	<?php include('footer.php'); ?>
<!-- footer -->	 
</body>
</html>