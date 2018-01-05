<?php get_header() ?>
	<?php the_post() ?> 
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>




	<!-- Biografía
        ============================= -->
    <div class = "biografia">
         
            <div class = "col-xs-8 col-md-5 col-md-offset-1">
                <p>Javiera Riveros es una cantante chilena que comenzó su carrera profesional en el año 2006 a cargo de la maestra María Elena Guiñez, la cual además de su destacada carrera, es reconocida como la heredera de la técnica de canto empleada por el ícono musical, María Callas. Guiñez, transmitió esta herencia a su alumna Javiera Riveros, enseñanzas que ha sabido dominar, con verdadero talento y desplante.</p><br />
                <p>Con una hermosa voz y una impecable presentación escénica, Javiera ha realizado diversos papeles artísticos en los que incluye Susanna y Barbarina, ambas de la ópera “Le nozze di Figaro”, Sor Genoveva de la ópera “Suor Angelica”, Michaela de la ópera “Carmen”, entre otros.</p><br />
                <p>Ha realizado espectáculos en grandes teatros y recintos a lo largo de todo Chile, dentro de los que se destaca el Teatro Cariola, Palacio Rioja en Viña del Mar, Biblioteca Nacional de Santiago, Teatro Facetas, Casa de la cultura de Ñuñoa, teatro Diego Rivera en Puerto Montt, Iglesia Santo Domingo Savio, Ilustre Municipalidad de La Cisterna y teatro Municipal de Chillán. También ha realizado numerosas funciones en conciertos, matrimonios, cumpleaños, colegios, hogares de ancianos y eventos varios, además de involucrarse, en importantes proyectos que buscan difundir la música clásica de forma trasversal a cualquier estrato social, y acercar el canto clásico a la gente joven.</p><br />
                <p>Javiera Riveros es una artista multifacética, por lo que la naturaleza de sus presentaciones no son puramente clásicas, presentando el arte del canto en sus más variadas expresiones, indagando en ramas como el folklore, tangos, zarzuelas, canto sacro, bolero, musicales y diverso repertorio de canciones populares.</p><br />
                <p>En la actualidad, participa en la compañía de canto “Pasión Lírica”, con la cual está trabajando en diversos proyectos dentro de los que se incluye: Antología de zarzuelas,  Ópera Cenerentola y folklore para Chile. </p> <br />
            </div>
            <div class="col-xs-4 col-md-5">
                <img class = "img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/4.jpg"/>

                <img class = "img-responsive" id="vestflo" src="<?php bloginfo('template_url') ?>/assets/images/vestidoFlores.jpg"/>
            </div>
        
    </div>



<?php get_footer() ?>