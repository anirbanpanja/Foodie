
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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
			<li class="active">Contact Us</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- contact -->
	<div id="contact" class="contact cd-section">
		<div class="container">
			<h3 class="w3ls-title">Contact us</h3>
			<p class="w3lsorder-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sheets containing sed </p> 
			<div class="contact-row agileits-w3layouts">  
				<div class="col-xs-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>DROP US A LINE </h4>
						<form action="#" method="post"> 
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required=""> 
							<input type="text" name="Phone Number" placeholder="Phone Number" required="">
							<textarea name="Message" placeholder="Message..." required=""></textarea>
							<input type="submit" value="Submit" >
						</form> 
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 contact-w3lsright">
					<h6><span>Sed interdum </span>interdum accumsan nec purus ac orci finibus facilisis. In sit amet placerat nisl in auctor sapien. </h6>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Visit Us</h5>
							<p>Netaji Road, Alipurduar, IND 736121</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row w3-agileits">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Mail Us</h5>
							<p><a href="mailto:anirban.panja55@gmail.com">anirban.panja55@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Call Us</h5>
							<p>8759427208</p>
						</div>
						<div class="clearfix"> </div>
					</div>  
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>	
		<!-- map -->
		<div class="map agileits">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055"></iframe>
		</div>
		<!-- //map --> 
	</div>
	<!-- //contact -->    
	<!-- footer -->
	<?php include('footer.php');?>
	<!-- //footer -->	
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>