<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="#"><span class="icon-user"></span> My Account</a> 
				<a href="register.php"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	Twitter Bootstrap shopping cart HTML template is available @ $14
	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Home	</a></li>
			  <li class="active"><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			  <li class=""><a href="three-col.php">Three Column</a></li>
			  <li class=""><a href="four-col.php">Four Column</a></li>
			  <li class=""><a href="general.php">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Watches</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Beads</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.php"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
<div class="span9">
<div class="well well-small">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/a.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/b.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/c.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/d.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/e.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/f.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/g.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/h.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/i.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/a.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/b.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/6.png"></a>
		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.php">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>