<?php get_header() ?>
	<?php the_post() ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>


	 <!-- Videos
        ============================= -->

<ul class="portfolio">

    <?php
        $videos = array(
            'post_type'      => 'videos',
            'posts_per_page' => 8,
        );
    
        $get_videos = new WP_Query( $videos );
    
        while ( $get_videos->have_posts() ) {
            $get_videos->the_post();
        ?>

    
    <p><?php the_field('contenido'); ?></p>
    <h2><?php the_field('link'); ?></h2>
    
        <?php } wp_reset_postdata();
    ?>

</ul><!-- .videos -->

<?php get_footer() ?>