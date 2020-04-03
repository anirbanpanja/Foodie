<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In to Foodies</title>
<?php include('head.php');?>
</head>
<body> 
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<?php include('header.php');?>
		<!-- //header---> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Login</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- login-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="validation.php" method="post"> 
					<input class="agile-ltext" type="text" name="email" placeholder="email" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox" required=""><i></i> 
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="forget.php">Forgot password?</a> </li>
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="signup.php"> Sign Up Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //login-page --> 
	<!-- footer -->
<?php include('footer.php');?>
	<!-- //footer -->	
</html>