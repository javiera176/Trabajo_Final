<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();
 
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

	 	wp_register_script('custom', get_theme_file_uri('/assets/js/lib/custom.js'), null, null, false);
		wp_register_script('jQuery', get_theme_file_uri('/assets/js/lib/jquery-1.12.4.min.js'), null, null, false); 
		wp_register_script('migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery'), null, false); 
		
		wp_register_script('easing', get_theme_file_uri('/assets/js/lib/jquery.easing.1.3.js'), array('migrate'), null, false); 
		wp_register_script('flexslider', get_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('migrate'), null, false); 
		wp_register_script('nivoSlider', get_theme_file_uri('/assets/js/lib/jquery.nivo.slider.pack.js'), array('migrate'), null, false);
		wp_register_script('prettyPhoto', get_theme_file_uri('/assets/js/lib/jquery.prettyPhoto.js'), array('migrate'), null, false); 
		wp_register_script('quicksand', get_theme_file_uri('/assets/js/lib/jquery.quicksand.js'), array('migrate'), null, false); 
		
		wp_register_script('script', get_theme_file_uri('/assets/js/script.js'), null, null, false);

		wp_enqueue_script('easing');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('nivoSlider');
		wp_enqueue_script('prettyPhoto');
		wp_enqueue_script('quicksand');
		
		wp_enqueue_script('custom');
		wp_enqueue_script('script');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>