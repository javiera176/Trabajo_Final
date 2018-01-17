<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<?php get_template_part('_includes/meta', 'charset') ?>  
	<?php get_template_part('_includes/meta', 'search') ?>
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

	
	<?php get_template_part('_includes/meta', 'googleAnalytics') ?>


</head>
<body>

	<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
          
             <h1 class="logo2">Javiera Riveros</h1> <!-- .logo-->
            
            <!-- Nav Menu -->
            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu', 'menu_class' => 'nav-menu right' ) ); ?>
			<?php } ?>
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->