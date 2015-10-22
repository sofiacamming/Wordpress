<?php get_header() ?>

<?php /* Template Name: contacts */
	$contacts = new WP_Query(array("post_type" => "contact")); ?>

<ul id="contacts">
	<?php if($contacts->have_posts() ): while($contacts->have_posts() ): $contacts->the_post(); ?>
		<li>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php echo get_post_meta(get_the_id(), '_my_meta_value_key')[0]; ?>
			<br /><?php echo get_post_meta(get_the_id(), '_my_email_meta_value_key')[0]; ?></p>
		</li>
	<?php endwhile; endif; ?>
</ul>

<?php get_footer(); ?>