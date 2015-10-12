<!DOCTYPE HTML>

<html>
	<head>
		<title>
			Victoria's Secret Beauty | VSbeauty.com
		</title>
		<meta charset="utf-8" />

		<!-- CSS & Javascript -->
		<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri() ?>/js/javascript.js" rel="javascript" type="javascript">

		<!-- Typsnitt -->
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	</head>

	<header>
		<div id="fixedtop">
			<div id="fixedtopdiv">
				<div id="fixedtoptext">
					<a href="<?php echo get_template_directory_uri() ?>/index.html">
						<p>Victoria's secret</p> <p> | </p> <p> Beauty</p>
					</a>
				</div>

				<!--
				<div id="fixedtopsearch">
					<form>
						<input type="text" name="search" id="searchform" required="true" value="" placeholder="SÖK PRODUKT" />
					</form>
				</div>
				-->

				<div id="fixedtopicons">
					<img id="searchicon" src="<?php echo get_template_directory_uri() ?>/img/searchicon.png" onclick="search()">
					<a href=""><img src="<?php echo get_template_directory_uri() ?>/img/carticon.png"></a>
				</div>
			</div>
		</div>
		<div id="searchtop">
			<form>
				<input type="text" id="searchinput" required="true" value="" placeholder="SÖK PRODUKT">
			</form>
			<div id="livesearch"></div>
		</div>
		<div id="logga">
			<h1> <a href="<?php echo get_template_directory_uri() ?>/index.html"> Victoria's Secret </a></h1> <h2> Beauty </h2>
		</div>
		<nav class="toppnav">
			<ul id="toppmeny">
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Dofter </a> </li> 
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Lotion </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Hårvård </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Accessoarer & researtiklar </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Presentartiklar </a> </li>
				<li id="rea"> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Rea </a> </li>
			</ul>
		</nav>
	</header>
	<body>
		<aside>
		</aside>
		<main>
			<div id="textline">Fri frakt vid köp över 200kr</div>
			<div id="firstblock">
			</div>
			<div id="blockwrapper">
				<div id="block1">
					<p id="blocktext">Besök även våra butiker i Malmö, Göteborg och Stockholm. <br /><b>Välkommen in!</b></p>
				</div>
				<div id="block2">
					<p id="blocktext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</div>
		</main>
	</body>
	<footer>
		<div class="footerwrapper">
			<div class="footerdivservice">
				<h3>
					Kundservice
				</h3>
				<p id="nummer"> 0703133898 </p>
				<p>
					Dygnet runt
					<br />
					<a href="">kundservice@victoriassecret.se</a>
				</p>
			</div>
			<div class="footerdivfollow">
				<h3>
					Följ oss på
				</h3>
				<ul>
					<li><a href="https://www.facebook.com/victoriassecret?fref=ts" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.png">facebook</a></li>
					<li><a href="https://instagram.com/victoriassecret/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.png">instagram</a></li>
					<li><a href="https://twitter.com/VictoriasSecret" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/twitter.png">twitter</a></li>
					<li><a href="https://www.youtube.com/user/VICTORIASSECRET" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.png">youtube</a></li>
					<li><a href="https://www.pinterest.com/victoriassecret/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/pinterest.png">pinterest</a></li>
				</ul>
			</div>
			<div class="footerdivinfo">
				<h3>
					Info
				</h3>
				<ul>
					<li><a href="">Allmänna villkor</a></li>
					<li><a href="">Integritetspolicy</a></li>
					<li><a href="">Ångerrätt, retur & byte</a></li>
				</ul>
			</div>
		</div>
	</footer>
</html>

