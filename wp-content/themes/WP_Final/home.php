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
            <h3>Descubra cuales son los servicios ofrecidos</h3>
            
            <ul>
                <li>
                    <span class="li_heart" style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar1')" ></span>
                    <h4>Matrimonios</h4>
                    <p id = "contenido_a_mostrar1">Imagínate ese día tan importante entrando al altar con el Ave María</p>
                </li> 

                <li>
                    <span class="li_star" style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar2')"></span>
                    
                    <h4>Conciertos</h4>
                    <p id = "contenido_a_mostrar2">Contrata nuestros servicios para una velada inolvidable</p>
                </li>
                
                
                <li>
                    <span class="li_music" onclick="muestra_oculta('contenido_a_mostrar3')"></span>
                    <h4>Clases de canto</h4>
                    <p id = "contenido_a_mostrar3">¿Quieres aprender canto? Esta es tu oportunidad</p>
                </li>
                
                
                <li>
                    <span class="li_star" onclick="muestra_oculta('contenido_a_mostrar4')"></span>
                    <h4>Papeles de ópera</h4>
                    <p id = "contenido_a_mostrar4">Con mucha experiencia en canto y actuación </p>
                </li>
                
                
                <li>
                    <span class="li_graduation-cap" onclick="muestra_oculta('contenido_a_mostrar5')"></span>
                    <h4>Licenciaturas</h4>
                    <p id = "contenido_a_mostrar5">Presentación sobrecogedora para ese día del recuerdo</p>
                </li>
                
                
                <li>
                    <span class="li_star" onclick="muestra_oculta('contenido_a_mostrar6')"></span>
                    <h4>Eventos varios</h4>
                    <p id = "contenido_a_mostrar6"> Funerales, cumpleaños entre otros... Cualquier evento en el que desee nuestra participación por favor comunicarse con nostros.</p>
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
            <h3>Visite nuestra galería </h3>
             
            
            <!-- Portfolio -->
            <ul class="portfolio">

                <?php
                    $portfolio = array(
                        'post_type'      => 'portfolio',
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
            <h3>Cualquier consulta o comentario, por favor comunicarse con nosotros</h3>
            
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
                    <p>Comuníquese desde cualquier parte de Chile</p>
                    
                     
                    <span><i class="icon-phone"></i>9 88328298</span>
                    <span><i class="icon-mail"></i>javiera177@gmail.com</span>
                </li>
            </ul>
              
            
        </div><!-- .inner -->
        
        <div class = "mapa col-md-6 col-md-offset-3">
            <h2>Donde encontrarnos</h2>
             <div id="map"></div>
        </div>


          <div class="daily-message">  </div>
    </div><!-- #contact -->
    <!-- End Contact -->


    <!-- plugins jQuery
    ============================= -->
    
    <script>  
        $.fn.greenify = function() {
            this.css( "color", "#697089" );
        };
 
        $( "a" ).greenify(); // Makes all the links grey.


       $('.daily-message').dailyMessages({
            monday:  "Es lunes, es un buen día para cantar",
            tuesday: "Este día martes baila con tu música favorita",
            wednesday: "Es mitad de semana, a relajarse escuchando música clásica",
            thursday: "Ya casi termina la semana, energízate escuchando una opereta",
            friday: "¡Por fin es viernes! a celebrar con tu música favorita",
            saturday: "Es sábado, un buen día para ir al teatro",
            sunday: "Día domingo, un buen día para relajarse con la familia y escuchar canciones del recuerdo",
            success: function() {
                console.log('It worked!');
            },
            error: function(message) {
                console.log(message);
                $(this).remove();
            }
        }); //entrega un mensaje cada día de la semana  
    </script>
    <!--  End jQuery plugins -->

    <!-- API de Google Maps
    ============================= -->
    <script>
      function initMap() {
        var uluru = {lat: -33.4239619, lng: -70.54014560000002};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyeWMN-IIuhRBp1qXybv8-Ki5Wubh4evU&callback=initMap">
    </script>   

    <!--End API de Google Maps-->

     <!--  solución Vanilla
    ============================= -->

    <script language="JavaScript">

        function muestra_oculta(id){
            if (document.getElementById){ //se obtiene el id
                var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
                el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
            }
        }
        window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
            muestra_oculta('contenido_a_mostrar');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
        } //al presionar los linecons se muestra y oculta el texto
    </script> 

    <!--End solución Vanilla-->
 
<?php get_footer() ?>

