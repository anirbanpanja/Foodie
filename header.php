<div class="header">  
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.php">Foodies<span>Best Food Collection</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="active">Home</a></li>	
								<!-- Mega Menu -->
								<li><a href="menu.php">Menu</a></li>
								<li><a href="login.php">Track Order</a></li> 
								
								<li><a href="login.php" >My Cart</a></li>
						<li><a href="#" ><?php 
						if (isset($name[0]))

						 echo $name[0]; ?></a></li>

							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								   <a class="w3view-cart cross__link" href="login.php">

								
									<div class="dropdown">
										  <i class="fa fa-user" aria-hidden="true">
										  <div class="dropdown-content">
										    <a href="#">Link 1</a>
										    <a href="#">Link 2</a>
										    <a href="#">Link 3</a>
										  </div>
										</div>

								   	</i></a>

								   </div>

								</li>
							</form>   
						 </div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>