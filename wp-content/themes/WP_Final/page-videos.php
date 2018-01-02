<?php get_header() ?>
	<?php the_post() ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>


	 <!-- Videos
        ============================= -->

        <div class="container videos">

            <div class ="col-md-6">
                <h2>Je dis que rien ne m'épouvante...</h2>
                <p>Soprano Chilena Javiera Riveros.</p> 
                <p>Personaje Michaela </p>
                 <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tYBBo1G6BCo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="embed-responsive-item"></iframe> 
                </div>  
            </div>

             
            <div class ="col-md-6">
                <h2>Ave Maria</h2>
                 <p>Soprano Chilena Javiera Riveros.</p> 
                  <p>Compositor: Schubert</p>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6DjWdeOWdyY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                </div>  
            </div> 

             <div class ="col-md-6">
                <h2>Deh Vieni Non Tardar </h2>
                <p>Soprano Chilena Javiera Riveros.</p>
                <p>Personaje Susana</p> 
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PWNJ2aM1Vm8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                </div>  
            </div> 
             

             <div class ="col-md-6">
                <h2>O soave fanciulla</h2>
                <p>Soprano Chilena Javiera Riveros.</p>  
                <p>Personajes Mimì y Rodolfo</p>  
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HNh2zW9JulQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                </div>  
            </div> 

        </div>
    



<?php get_footer() ?>