<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
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


<!--
Navigation Bar Section 
--><!-- 
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
<br>
<ul class="nav nav-list promowrapper">
		<li></li>
		<li style="border:0"> &nbsp;</li>
		<li></li>
	    </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Items</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
		<?php $id=$_GET['idarticle'];
			  $requete1="select * from article where idarticle='$id'";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
while ($row = $result->fetch(PDO::FETCH_NUM)){


echo "
			<div class='span5'>
			<div id='myCarousel' class='carousel slide cntr'>
                <div class='carousel-inner'>
                  <div class='item active'>
                   <a href='#'> <img src='assets/article/$row[5]/$row[5].jpg' alt='' style='width:300px;height:300px'></a>
                  </div>
                  <div class='item'>
                     <a href='#'> <img src='assets/article/$row[5]/$row[5]a.jpg' alt='' style='width:300px;height:300px'></a>
                  </div>
                  <div class='item'>
                    <a href='#'> <img src='assets/article/$row[5]/$row[5]b.jpg' alt='' style='width:300px;height:300px'></a>
                  </div>
                </div>
                <a class='left carousel-control' href='#myCarousel' data-slide='prev'>‹</a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'>›</a>
            </div>
			</div>
			<div class='span7'>
				<h3>$row[0]</h3>
				<hr class='soft'/>
				
				<form name='quantityproduct' class='form-horizontal qtyFrm'>
				  <div class='control-group'>
					<label class='control-label'><div id='price'>$row[3]dt</div></label>
					<div class='controls'>
					<input type='number' class='span6' placeholder='Qty.' name='quantity' onchange='quantitychange($row[3])' min='1' onload='wlinebreak()' >
					</div>
				  </div>
			
				  <h4><div id='totalquantity'>$row[2]</div> items in stock</h4>
				
				  <div id='desc'>$row[1]</div>

				  <button type='submit' name='envoicart' class='shopBtn'><span class=' icon-shopping-cart'></span> Add to cart</button>
				</form>
			</div>
			</div> ";}} ?>

			
			<hr class="soften"/>
			
				</div>
            </div>

</div>
</div>
</div> <!-- Body wrapper -->
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
</div>
	
</body>
</html>