<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="S-Market" content="Digital Market">
	<title>Account</title>
	<link rel="stylesheet" href="sdm1.css"/>
	<link rel="stylesheet" href="sdm11.css"/>
	<link rel="stylesheet" href="account.css"/>
	<link rel="stylesheet" href="loading.css" />
	<style>
		body
		{
			background-position: 0% 14%;
			background-image: url('images/bglog.jpg');
		}
		.error
		{
			background-color:#333;
			border-radius:35px;
			width:50%;
			height:auto;
			text-align:center;
			color:#fff;
			position:static;
			top:100px;
			font:bold 15px "Times New Roman";
			margin:auto;
			position: relative;

		}
		.logform
		{
			margin-top:7%;
		}
	</style>
	<span id="newst"></span>
</head>
<body>
		<nav>
			<a href="index.php"><img src="images/logo5.png" class="logo"/></a>
			<ul>
				<a href="index.php"><li >Home</li></a>
				<a href="products.php"><li>Products</li></a>
				<a href="about.php"><li
				>About</li></a>
				<a href="#con11"><li>Contact</li></a>
				<a href="account.php" ><li style="	
				box-shadow: 3px 3px 5px 1px #2cbbc0,
							-3px -3px 5px 1px #ffce34;
				background-color: #262626;">Account</li></a>
				
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
		<?php if(count($errors) > 0): ?>
	<div class="error">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
	<?php endif ?>
		<div class="logform">

			<br>
			<section>
			<button id="login" onclick="colortransfer()" class="btnl">Login</button>
			<button id="register" onclick="colortransfer2()" class="btnl">Register</button>
			</section>
			<img src="images/gp2.png">
			<img src="images/fb2.png">
			<img src="images/tw2.png">
			<section>
			<div class="contall">
			<div class="trans">
				<form action="account.php" method="post"><br>
					<input type="text" name="username" placeholder="UserName" autocomplete="off"><br>
					<input type="password" name="password" placeholder="Password"><br>
					<button name="login" class="btn5">Login</button><br><br><br><br>
				</form>
			</div>
			<div class="trans2">
				<form action="account.php" method="post">
					<input type="text" name="username" placeholder="UserName"><br>
					<input type="password" name="password" placeholder="Password"><br>
					<input type="email" name="email" placeholder="Email"><br>
					<button name="register" class="btn5">Register</button>
				</form>
			</div>
			</div>
		</section>






		</div>
		
		<br><br><br><br><br><br><br>
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
		<script >
			function colortransfer()
			{
				document.getElementById('newst').innerHTML ="<style> " +
				"#login{ transition:all .5s ease-in-out;background-image:url('images/grad1.jpg');}" +
				".contall{transform:translateY(30px);transition:all .5s ease-in-out;" +
				"</style>";
			}
			function colortransfer2()
			{
				document.getElementById('newst').innerHTML ="<style> " +
				"#register{ background-image:url('images/grad1.jpg');}" +
				".contall{transform:translateY(-350px);transition:all .5s ease-in-out;}" +
				"#login{background-image:none;}" +
				"</style>";
			}
			</script>
</body>
</html>