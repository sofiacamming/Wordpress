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
					<a href="">kundservice@vsbeauty.se</a>
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
			<nav class="footerdivinfo">
				<h3>
					Info
				</h3>
				<!-- <ul id="footermeny">
					<li><a href="">Allmänna villkor</a></li>
					<li><a href="">Integritetspolicy</a></li>
					<li><a href="">Ångerrätt, retur & byte</a></li>
				</ul> -->

				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_class' => 'footerdivinfo', 'menu_id' => 'footermeny', 'container' => 'nav' ) ); ?>


			</div>
		</div>
	</footer>
	<script src="<?php echo get_template_directory_uri() ?>/js/javascript.js"></script>
	</body>
</html>