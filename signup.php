<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
<?php include('head.php');?>
</head>
<body> 
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<?php include('header.php');?>
		<!-- //header-end --> 
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
			<li class="active">Sign Up</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="registration.php" method="post"> 
					<input class="agile-ltext" type="text" id="name" name="name" placeholder="name" required="">
					<input class="agile-ltext" type="email" id="email" name="email" placeholder="Your Email" required="">
					<input class="agile-ltext" type="password" id="password" name="password" placeholder="Password" required="">
					<input class="agile-ltext" type="text" id="password2" name="password2" placeholder="Conform Your Password" required="">
					<div class="wthreelogin-text"> 
						<ul>  
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> I agree to the terms of service</span> 
								</label> 
							</li> 
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Sign Up" name="signup_btn">
				</form>
				<p>Already have an account?  <a href="login.php"> Login Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //sign up-page --> 
	<!-- footer -->
	<?php include('footer.php');?>
	<!-- //footer -->
</body>
</html>