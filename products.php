<!DOCTYPE html>
<html>
<head>
	<title>All Products - Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">

	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="125px"></a>
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>

	<div class="small container"> 

		<div class="row row-2">
			<h2>All Products</h2>
			<select>
				<option>Defaul Sorting</option>
				<option>Sort by Price</option>
				<option>Sort by Popularity</option>
				<option>Sort by Rating</option>
				<option>Sort by Sale</option>
			</select>

			
		</div>


		<div class="row">
			<div class="col-4">
				<a href="product-details1.php"><img src="images/product-1.jpg"></a>
				<h4>Kyrie 7 "Weatherman"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱7590</p>
			</div>
			<div class="col-4">
				<a href="product-details2.php"><img src="images/product-2.jpg"></a>
				<h4>Kobe 6 "Grinch"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>₱8799.99</p>
			</div>
			<div class="col-4">
				<a href="product-details3.php"><img src="images/product-3.jpg"></a>
				<h4>Nike Zoom Freak 3 "Aqua"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱6,389.00</p>
			</div>
			<div class="col-4">
				<a href="product-details4.php"><img src="images/product-4.jpg"></a>
				<h4>Rick and Morty x Puma MB.01</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱7999.99</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="product-details5.php"><img src="images/product-5.jpg"></a>
				<h4>Curry 9 "Sesame Street"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱8,595</p>
			</div>
			<div class="col-4">
				<img src="images/product-6.jpg">
				<h4>KD 14 "White Black"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱8799.99</p>
			</div>
			<div class="col-4">
				<a href="product-details7.php"><img src="images/product-7.jpg"></a>
				<h4>Yeezy 700</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱35,875</p>
			</div>
			<div class="col-4">
				<a href="product-details8.php"><img src="images/product-8.jpg"></a>
				<h4>Nike SB Dunk Low "Ben and Jerrys"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱5,240.50</p>
			</div>
			<div class="col-4">
				<a href="product-details9.php"><img src="images/product-9.jpg"></a>
				<h4>Nike Air Force 1</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱6499.99</p>
			</div>
			<div class="col-4">
				<img src="images/product-10.jpg">
				<h4>Air Jordan 1 "University Blue"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱7999.99</p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4>Nike Air Jordan 11"Cool Gray"</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱9599.99</p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4>Travis Scott Nike SB Dunk Low</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>₱10599.99</p>
			</div>
		</div>
		<div class="page-btn">
			<a href="products.php"><span>1</span></a>
			<a href="products2.php"><span>2</span></a>
			<a href="products3.php"><span>3</span></a>
			<a href="products4.php"><span>4</span></a>
			<span>&#8594;</span>
		</div>
	</div>
	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>


</body>
</html>