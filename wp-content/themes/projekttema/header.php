<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Victoria's Secret Beauty | VSbeauty.com
		</title>
		<meta charset="utf-8" />

		<!-- CSS & Javascript -->
		<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" type="text/css" />
		

		<!-- Typsnitt -->
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<header>
		<div id="fixedtop">
			<div id="fixedtopdiv">
				<div id="fixedtoptext">
					<a href="<?php echo get_template_directory_uri() ?>/wordpress">
						<p>Victoria's secret</p> <p> | </p> <p> Beauty</p>
					</a>
				</div>
				<div class="fixedtopicons">
					<img id="searchicon" src="<?php echo get_template_directory_uri() ?>/img/searchicon.png" onclick="search()">
					<a id="carticon" href=""><img src="<?php echo get_template_directory_uri() ?>/img/carticon.png"></a>
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
			<h1> <a href="<?php echo get_template_directory_uri() ?>/wordpress"> Victoria's Secret </a></h1> <h2> Beauty </h2>
		</div>
		<!--
		<nav class="toppnav">
			<ul id="toppmeny">
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Dofter </a> </li> 
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Lotion </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Hårvård </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Accessoarer & researtiklar </a> </li>
				<li> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Presentartiklar </a> </li>
				<li class="rea"> <a href="<?php echo get_template_directory_uri() ?>/shop.html"> Rea </a> </li>
			</ul>
		</nav>
	-->
	

	<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_class' => 'toppnav', 'menu_id' => 'toppmeny', 'container' => 'nav' ) ); ?>
	

	</header>