<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="S-Market" content="Digital Market">
	<title>About</title>
	<link rel="stylesheet" href="sdm1.css"/>
	<link rel="stylesheet" href="sdm11.css"/>
	<link rel="stylesheet" href="loading.css" />
	<style>
		body
		{
			background:url('images/bg8.jpg');
			background-position:50% 60%;
		}
		.container
		{
			font-size: 30px;
			transition: all 2s ease-in-out; 
		}
		.container .abouth
		{
			margin:auto;
			text-align:center;
			font-size:45px;
			perspective:500px;
		}
		.container ul
		{
			margin:auto;
			text-align:left;
			font-size:25px;
			margin:40px 0px 0px 120px;
			
			line-height: 2em;
			perspective: 500px;
			list-style-type: none;
			border-radius:70%;
			width:85%;

		}
		.container ul li::before
		{
			content:" ► ";
			color:#2cbbc0;
		}
		.container:hover
		{
			background-color:#2e3e3f59;
			perspective: 500px;
			box-shadow: 5px 5px 20px 10px #ffce346e,
						-5px -5px 20px 10px #ffce346e;
						transition:all 2s ease-in-out;

		}
		@keyframes shadowlight
		{
			from
			{
				box-shadow: 10px 10px 20px 20px #ffce34,
						-10px -10px 20px 20px #3b5c17;
			}
			to
			{
				box-shadow: 10px 10px 20px 20px #3b5c17,
						-10px -10px 20px 20px #ffce34;
			}
		}
	</style>
</head>
<body>
		<nav>
			<a href="index.php"><img src="images/logo5.png" class="logo"/></a>
			<ul>
				<a href="index.php"><li >Home</li></a>
				<a href="products.php"><li>Products</li></a>
				<a href="about.php"><li style="	
				box-shadow: 3px 3px 5px 1px #2cbbc0,
							-3px -3px 5px 1px #ffce34;
				background-color: #262626;"
				>About</li></a>
				<a href="#con11"><li>Contact</li></a>
				<a href="account.php"><li>Account</li></a>
				
			</ul>
			<a href="index.php"><img src="images/cart5.png" class="cart" title="cart"/></a>
		</nav>
		<marquee scrolldelay="0" hspace="0">
				30% sale on all products in the ocasion of the new opening of the market 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Next friday there will be offers up to 70% sale in ocasion of blackfriday 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Join the first Multinational Arabian Digiital market 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				Register Today for free ! 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				Our payment system supports most of prepayed cards 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Buy Anything Any Time Any Where with S-Market 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		</marquee>
		<div class="loader">
			<iframe name="load" src="loading.php" scrolling="No" id="load">
			</iframe>
		</div>
		<div class="container">
			<p class="abouth">
			S-MARKET<br></p>
			<p class="aboutsub">
				<ul>
					<li>The first international Arabian Digital Market.</li>
					<li>The market provides all essential tools to facilate the process
					to enjoy more easy and fun shopping experience.</li>
					<li>The market was founded 2020 by SilverPirate.</li>
					<li>The purpose of our Digital Market is to improve 
					the Digital markets experience of shopping in the Arabian Countries.</li>
					<li>Our slogan "Buy Anything Anytime Anywhere".</li>

				</ul>
			</p>


		</div>


		<br><br><br><br><br>
		<footer>
			<div class="footer1">
				<br>
				<img src="images/coca.PNG">
				<img src="images/spon2.png">
				<img src="images/spon3.png">
				<img src="images/spon4.png">
				<img src="images/spon5.png">
			</div>
			<table class="footer2">
				<tr>
					<th><br><br><br>
						Download Our App<br><br>
						<span>Avilable for android and ios now.</span><br><br>
						<a href="#"><img src="images/play-store.png"></a>
						<a href="#"><img src="images/app-store.png"></a>


					</th>
					<th class="raise1">
						<img src="images/logo5.png" ><br>
						<span>Our Purpose is to provide you the best online shopping experience.</span>
						

					</th>
					<th style="font-size:25px;">
						<br>
						Useful Links<br><br>
						<span><a href="index.php">Home</a><br>
						<a href="account.php">Register</a><br>
						<a href="products.php">Shopping</a>
						<br>
						<a href="about.php">About</a>
					</span>
						

					</th>
					<th style="font-size:25px;" id="con11">
						<br>
						Follow Us<br><br>
						<span><a href="#">FaceBook</a><br>
						<a href="#">Instagram</a><br>
						<a href="#">GitHub</a>
						<br>
						<a href="#">YouTube</a>
					</span>
						

					</th>
				</tr>
			</table><br>
			<hr><br>
			<p style="text-align:center;font-size:30px;">
			<span >Copyright 2020 - SilverPirate<br>All Rights Reserved.
			</span></p>

		</footer>
</body>
</html>