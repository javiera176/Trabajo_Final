<?php get_header() ?>
<?php 

	$arg = array(
		'post_type'		 => 'post',
		'paged'			 => $paged
	);

	$get_arg = new WP_Query( $arg );

	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
		<a href="<?php the_permalink(); ?>">
			<?php the_title() ?>
		</a>

	<?php } wp_reset_postdata();


?>
<?php get_footer() ?>