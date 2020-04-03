<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
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
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">About</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">	
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Fusce tempus</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
						</div> 
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Consectetur</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Dolor siet</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="history">
				<h3 class="w3ls-title">How does it work ?</h3>
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
				<h3 class="w3ls-title">Our history</h3>
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
			</div>
		</div>
	</div>
	<!-- //about-page --> 
	
	<!-- footer -->
	<?php include('footer.php');?>
	<!-- //footer -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
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