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
					<p>Victoria's secret</p> <p> | </p> <p> Beauty</p>
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
				<input type="text" name="search" id="searchinput" required="true" value="" placeholder="SÖK PRODUKT" />
			</form>
		</div>
		<div id="logga">
			<h1> <a href=""> Victoria's Secret </a></h1> <h2> Beauty </h2>
		</div>
		<nav class="toppnav">
			<ul id="toppmeny">
				<li> <a href=""> Dofter </a> </li> 
				<li> <a href=""> Lotion </a> </li>
				<li> <a href=""> Hårvård </a> </li>
				<li> <a href=""> Accessoarer & researtiklar </a> </li>
				<li> <a href=""> Presentartiklar </a> </li>
				<li id="rea"> <a href=""> Rea </a> </li>
			</ul>
		</nav>
	</header>
	<body>
		<aside>
		</aside>
		<main>
			innehåll
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