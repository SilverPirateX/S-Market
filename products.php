<?php include("server.php"); 
error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="S-Market" content="Digital Market">
	<title>Home</title>
	<link rel="stylesheet" href="sdm1.css"/>
	<link rel="stylesheet" href="sdm11.css"/>
	<link rel="stylesheet" href="sdm22.css"/>
	<style>
		*
		{
			outline:none;
		}
		.nom
		{
			color:green;
		}
		button[name ="logout"]
		{
			animation:none;
			transition: none;
			height:80%;
			width:8%;
			border-radius:0px;
			margin:auto;
			font:bold 15px "Georgia";
			top:10%;
			left:30%;
		}
		.viuv
		{
			margin:auto;
		}
		label
		{
			left:400px;
			position:absolute;
			margin-left:0px;
			top:0px;
		}
		select
		{
			position:absolute;
			top:0px;
			left:77%;
		}
		details
		{
			position:absolute;
			z-index: 98;
			cursor:pointer;
			height:90%;
			width:90%;
			top:0;
			box-sizing: content-box;
			margin-top:5px;
			margin-left:85%;
		}
		summary::-webkit-details-marker 
		{
  			display: none
		}
		details summary 
		{
			height:10%;
			width:10%;
		}
		details summary::before
		{
			content:none;		
		}
		details summary img
		{
			position: absolute;
			height:100%;
			width:100%;

		}
		.testd
		{
			width:700px;
			height:auto;
			background-color:#fff;
			position:absolute;
			left:-35%;
			top:200%;
			border:5px solid #333;
		}
		nav ul li
		{
			z-index:99;
		}
		.inpc
		{
			
			position:relative;
			left:90px;
			width:30px;
			bottom:30px;
			height:25px;
			font-weight:bold;
			display:inline-block;
			text-align:center;


		}
		.movel
		{
			position:relative;
			left:-10px;
			padding:0px;
			display:inline-block;
			height:0px;
			width:200px;

		}
		.dispprob
		{
			display:inline-block;
			position:absolute;
			margin-top:-100px;
			display:none;
		}
		table tr th
		{
			height:20%;
		}
		.product
		{
			height:375px;
			overflow: hidden;
		}
		.com table th img, .cos table th img, .foo table th img, .clo table th img
		{
			height:300px;
		}
		.com table th, .cos table th, .foo table th, .clo table th
		{
			height:370px;
			overflow: hidden;
		}
		.remove
		{
			animation:none;
			transition: none;
			position:relative;
			font:bold 14px "Arial";
			width:80px;
			height:30px;
			text-align:center;
			left:-30px;
			border-radius: 0px;
			border-color: #f00;
		}
		table th
		{
			font-size:22px;
			border-color:#2cbbc0;
			animation:none;
			transform:none;
			transition: none;
			perspective: none;
			text-align:center;
			font-weight: bold;

		}
		table td
		{
			font-size:18px;
			border: 1px solid #ffce34;
			animation:none;
			transform:none;
			text-align:center;
			font-weight: bold;
		}
		.transbtn
		{
			transform:none;
			animation:none;
			transition: none;
			border-radius: 0px;
			left:-5%;
			text-align: center;
			width:200px;
			height:50px;
			display: block;
		}
		.transbtn a
		{
			color:#fff;
			text-decoration: none;
		}
		iframe
		{
			position:fixed;
			width:100%;
			height:100%;
			z-index: 200;
			top:0;
			visibility: hidden;
			animation:viewl 3s 1 ease-in-out;
			transition: 'visibility' 5s ease-in-out; 
		}
		@keyframes viewl
		{
			from {
				visibility:visible;
			}
			to 
			{
				visibility: hidden;
			}
		}


	</style>
</head>
<body>
		<nav>
			<a href="index.php"><img src="images/logo5.png" class="logo"/></a>
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="products.php"><li
					style="	
				box-shadow: 3px 3px 5px 1px #2cbbc0,
							-3px -3px 5px 1px #ffce34;
				background-color: #262626;">Products</li></a>
				<a href="about.php"><li>About</li></a>
				<a href="#con11"><li>Contact</li></a>
				<a href="account.php"><li>Account</li></a>
				
			</ul>
			<details>
				<summary>
				<img src="images/cart5.png" class="cart" title="cart"/>
				</summary>
				<div class="testd">
					<?php 
					$username = $_SESSION['username'];
					$query13 ="SELECT id FROM account WHERE username = '$username'";
					$result13 = mysqli_query($db, $query13);
					while ($row = $result13->fetch_assoc()) 
	                {
	                    $acc_id = $row['id'];
	                }

					if( $acc_id != 0){ $testid = $acc_id; ?>
					<table id="tabsh">
					<tr>
						<th>#item</th>
						<th>Account ID</th>
						<th>Item ID</th>
						<th>Name</th>
						<th>Price</th>
						<th>Amount</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
					<?php
				$query5 ="SELECT * FROM cart WHERE acc_id = '$testid' ORDER BY id DESC";
				$result5 = mysqli_query($db, $query5);
				if(mysqli_num_rows($result5) > 0)
				{
					while ($row = $result5-> fetch_assoc())
					{
						{
						echo "<tr><td>" . $row["id"] . "</td><td>" . $row["acc_id"] . "</td><td>" . $row["item_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["total"] . "</td><td>" . "<form method='post' action='products.php'><input type='hidden' value='" . $row["id"] . " 'name='rmval'><button name='remove' class='remove'>Remove</button>" . "</td></tr>";
						}
					}
					echo"</table><br><hr><br>";
					echo "<button class='transbtn'><a href='http://localhost/atmproject/index.php' target='_blank'>Buy</a></button>";

				}
				else
				{

					echo "<p>Your Cart is empty.</p></table>";
				}
			}
			else
			{
				echo "<p>You No longer can use this feature unless you are logged in.</p></table>";
			}
			?>
				</div>
			</details>
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
		<div class="choicer">
			<?php 
			error_reporting(0);
			if (is_null($_SESSION['username']))
			{
				echo "<p><mark>Note</mark> you are now at surfing mode, you have to be logged in to use the cart and buy products.</p><label>Products Filter</label>";

				
			}
			else
			{
				echo "<p>welcome <span class='nom'>" . $_SESSION['username'] . "</span>, you can use the cart and buy items.</p>";
				echo"<form name='logout' method='get'><button name='logout'>LogOut</button></form><label>Products Filter</label>";
			}
			?>
			<select onchange="viuch()" id="viuv" class="viuv">
				<option selected value="all">All Products</option>
				<option value="com">Computers</option>
				<option value="cos">Cosmetics</option>
				<option value="foo">food products</option>
				<option value="clo">Clothes</option>

			</select>
		</div>
		<div class="loader">
			<iframe name="load" src="loading.php" scrolling="No" id="load">
			</iframe>
		</div>
		<div class="viewer" id="viewer">
			<table>
				<tr>
					<th>
					<div class="product">
						<img src="images/prod2.jpg">
						<hr>
						<p class="prod">
						Acer Predator Helios 700<br>
								1799$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="1"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod22.jpg">
						<hr>
						<p class="prod">
						Neousys Announces IGT-30<br>
								445$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="2"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod222.jpg">
						<hr>
						<p class="prod">
							IoT Gateway Starter Kit J-1900<br>
								399$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="3"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
				</tr>
				<tr>
					<th>
					<div class="product">
						<img src="images/prod1.png">
						<hr>
						<p class="prod">
						Nevia Collection<br>
								50$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="4"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod11.jpg">
						<hr>
						<p class="prod">
						Men's Energy Skin Set<br>
								24.98$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="5"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod111.jpg">
						<hr>
						<p class="prod">
						Degree Men Ultra Clear Black<br>
								4.9$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="6"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
				</tr>
				<tr>
					<th>
					<div class="product">
						<img src="images/prod3.jpg">
						<hr>
						<p class="prod">
						Heinz Pack X10<br>
								25$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="7"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod33.jpg">
						<hr>
						<p class="prod">
						Milo Nestle<br>
								3.4$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="8"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod333.jpg">
						<hr>
						<p class="prod">
						Food Grade Wax<br>
								4.5$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="9"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
				</tr>
				<tr>
					<th>
					<div class="product">
						<img src="images/prod4.jpg">
						<hr>
						<p class="prod">
						Indian Style Shirt<br>
								44$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="10"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod44.png">
						<hr>
						<p class="prod">
						Leather Jacket<br>
								109$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="11"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
					<th>
					<div class="product">
						<img src="images/prod444.jpg">
						<hr>
						<p class="prod">
						Lemon Gold Lace Dress<br>
								199$</p>
								<form method="post" action="products.php" class="movel">
									<input name="idval" type="hidden" value="12"class="dispprob">
									<input name="amount" type="number" placeholder="1" value="1" class="inpc">
									<button name="add" class="prodbtn">Add to Cart</button>
								</form>

					</div>
					</th>
				</tr>
			</table>
		</div>

		<br><br><br><br><br><br><br><br><br>
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
		<script>
	function viuch()
	{
		var sval = document.getElementById('viuv').value;
		var view = document.getElementById('viewer');
		if(sval == "com")
		{
			view.className = 'com';
		}
		else if (sval == "cos")
		{
			view.className = 'cos';
		}
		else if (sval == "foo")
		{
			view.className = 'foo';
		}
		else if (sval == "clo")
		{
			view.className = 'clo';
		}
		else
		{
			view.className = 'viewer';
		}

	}
</script>

</body>
</html>