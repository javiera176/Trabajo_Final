<?php get_header() ?>


    
    
	<!-- Slider
		============================= -->


	<div id="slider" class="theme-default">
        <div class="inner">
        
        	<div class="nivo-slider nivoSlider">

        		<img class = "img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/Blanneg.jpg"/>
    		 	<img class = "img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/4_2.jpg"/>
             	<img class = "img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/7_2.jpg"/>
               
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Lo que ofrecemos</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<span class="li_heart"></span>
                    <h4>Matrimonios</h4>
                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    
                    <h4>Conciertos</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                </li>
                
                
                <li>
                	<span class="li_music"></span>
                    <h4>Clases de canto</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    <h4>Papeles de ópera</h4>
                    <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
                </li>
                
                
                <li>
                	<span class="li_graduation-cap"></span>
                    <h4>Licenciaturas</h4>
                    <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem .</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    <h4>Eventos varios</h4>
                    <p> Funerales, cumpleaños etc... Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Galería de imágenes</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
             
            
            <!-- Portfolio -->
            <ul class="portfolio">

				<?php
					$portfolio = array(
						'post_type'		 => 'portfolio',
						'posts_per_page' => 8,
					);
				
					$get_portfolio = new WP_Query( $portfolio );
				
					while ( $get_portfolio->have_posts() ) {
						$get_portfolio->the_post();
					?>

            	<li data-id="id-1" data-type="webdesign">
                    <a href="<?php the_post_thumbnail_url() ?>" rel="prettyPhoto[portfolio]">
                        <?php the_post_thumbnail('portfolio'); ?>
                    </a>
                </li>
				
					<?php } wp_reset_postdata();
				?>

            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	 
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Contacto</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form action="" method="get">
                    	
                        <input name="Name" class="" type="text" value="Nombre (Requerido)" onfocus="if(this.value == 'Name (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name (Required)'; }" />
                        
                        <input name="Email" class="" type="text" value="Email (Requerido)" onfocus="if(this.value == 'Email (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email (Required)'; }" />
                        
                        <input name="Subject" class="" type="text" value="Asunto" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Subject'; }" />
                        
                        <textarea name="Detail" cols="" rows="" onfocus="if(this.value == 'Describe your project in detail...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Describe your project in detail...'; }">Tus consultas o comentarios</textarea>
                        
                        <input type="submit" value="submit" name="subscribe" class="submitbtn" />
                        
                    </form>
                </li>
                
                <li>
                	<h4>Información de contacto</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                     
                    <span><i class="icon-phone"></i>9 88328298</span>
                    <span><i class="icon-mail"></i>javiera177@gmail.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
    
 <script>
     
 
        $('.li_heart').click(function(event){ 

           console.log("hola");


             
        }); 

 
        $.fn.greenify = function() {
            this.css( "color", "#697089" );
        };
 
        $( "a" ).greenify(); // Makes all the links green.
 
 
 </script>

 
 
<?php get_footer() ?>

