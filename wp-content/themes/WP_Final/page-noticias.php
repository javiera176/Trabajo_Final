<?php get_header() ?>
	<?php the_post() ?>
	
 
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>



	 <table class="table table-striped table-hover" id="tabla">
	        <tr>
	          <th>ID</th>
	          <th>Título</th>
	          <th>Contenido</th>
	        </tr>
	 </table>

	<button type="button" id="boton" class="btn btn-primary">Consumir datos</button>
	
 


	<script>
		
		$('#boton').on("click", function() {
			var url = 'https://jsonplaceholder.typicode.com'; //pasamos una URL 
			var id = parseInt(Math.random() * 100); // se general el id y se pone 100 porque es el máximo de post

		    $.ajax({
		    url: url + '/posts/' + id, //concatenamos el id
		    method: 'GET' //método que vamos a utilizar
		    }).then(function(data) {
		      $('#tabla').append('<tr> <td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.body + '</td></tr>')
		    });
		});


	</script>

<?php get_footer() ?>