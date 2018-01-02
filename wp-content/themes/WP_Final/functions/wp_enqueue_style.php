<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		 
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, null, 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/main.css'), array('reset'), null, 'screen');
		wp_register_style('nivoSlider', get_parent_theme_file_uri('/assets/css/nivo-slider.css'), array('reset'), null, 'screen');
		wp_register_style('nivotheme', get_parent_theme_file_uri('/assets/css/nivotheme.css'), array('reset'), null, 'screen');
		wp_register_style('prettyPhoto', get_parent_theme_file_uri('/assets/css/prettyPhoto.css'), array('reset'), null, 'screen');
		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/css/bootstrap.css'), array('reset'), null, 'screen');

		wp_register_style('Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900', null, null, true);
		wp_register_style('Vibes', 'https://fonts.googleapis.com/css?family=Great+Vibes', null, null, true);
		 
		/* Enqueue Scripts */
 	
 		
 		wp_enqueue_style('Lato');
 		wp_enqueue_style('Vibes');
 		
 		wp_enqueue_style('nivoSlider');
 		wp_enqueue_style('nivotheme');
 		wp_enqueue_style('prettyPhoto');
 		wp_enqueue_style('bootstrap');
 		wp_enqueue_style('mainStyle');
 		
	 
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>