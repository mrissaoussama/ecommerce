<?php include 'header.php';?>

  
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
	  <script src='insert.js'></script>

 </head>
<body>
<!-- 
	Upper Header Section 
-->

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
<ul class="nav nav-list promowrapper">
		<li></li>
			<li style="border:0"> &nbsp;</li>
			<li></li>
			<li style="border:0"> &nbsp;</li>
			<li></li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<hr class="soft"/>
	<?php if ($_SESSION['is_connected']==0){ echo ('
	<div class="well">
	<form class="form-horizontal" name="register" method="POST" action="site.php" id="registerform" onsubmit="return registersubmit();">
		<h3>Your Personal Details</h3>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name" name="prenom">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name" name="nom">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email" name="email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Password" name="mdp">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="inputEmail">Phone Number<sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Phone Number" name="phone">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <p>
		    <input type="date" name="datenaissance">
		  </p>
		</div>
	  </div>
		<div>
          <h3>Your Billing Details</h3>
          <div class="control-group">
            <label class="control-label">Region<sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder="Region" name="region">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Address<sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder="Address" name="adresse">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Postal Code<sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder="Postal Code" name="postalcode">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <input type="submit" name="registerbutton" value="Register" class="shopBtn exclusive" id="registerbutton">
            </div>
        </div>
        </div>
	<div class="control-group">
		<h3 id="result"></h3>
	
	</div>
	</form>
</div>');} else echo 'vous etes connectes';?>
	</div>
</div>
<!-- 
Clients 
--><!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.php">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
</div>
</footer>
</div><!-- /container --><a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
