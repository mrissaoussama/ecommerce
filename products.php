<?php include 'header.php';?>
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
	    </ul>

	</div>
	<div class="span9">
<!-- 
New Products
-->
	<div class="well well-small">
	<h3>Our Products</h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
			  <?php 
			  $requete1="select nomarticle,prix,type,idarticle from article";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
while ($row = $result->fetch(PDO::FETCH_NUM)){


echo "<li class='span4'>
			  <div class='thumbnail'>
				<a href='product_details.php?idarticle=$row[3]' class='overlay'></a>
				<a class='zoomTool' href='product_details.php?idarticle=$row[3]' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
				<a href='product_details.php?idarticle=$row[3]'><img class='imageproduit' src='assets/article/$row[3]/$row[3].jpg' alt='' ></a>
				<div class='caption cntr'>
					$row[0]
					<p><strong> $row[1]dt</strong></p>
					<h4><a class='shopBtn' href='#' title='add to cart'> Add to cart </a></h4>
					
					<br class='clr'>
				</div>
			  </div>
			</li>"	;}}?>
		  </ul>	
	</div>
	</div>
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