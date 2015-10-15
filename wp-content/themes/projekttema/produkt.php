<?php get_header() ?>

	<main>
		<div id="produkt">
			<div id="leftdiv">
				<img src="img/bodymist-mango-temptation.png">
			</div>
			<div id="rightdiv">
				<h3>Mango Temptation</h3>
				<p id="pris">250kr</p>
				<p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				<button>Köp</button>
			</div>
		</div>
		<div id="recommended">
			<h4>Andra har också köpt</h4>
			<a href="<?php echo get_template_directory_uri() ?>/produkt.php"><img src="img/bodymist-mango-temptation.png"></a>
			<a href="<?php echo get_template_directory_uri() ?>/produkt.php"><img src="img/bodymist-aqua-kiss.jpg"></a>
			<a href="<?php echo get_template_directory_uri() ?>/produkt.php"><img src="img/bodymist-passion-struck.jpg"></a>
			<a href="<?php echo get_template_directory_uri() ?>/produkt.php"><img src="img/bodymist-love-spell.jpg"></a>
		</div>
	</main>



<?php get_footer() ?>