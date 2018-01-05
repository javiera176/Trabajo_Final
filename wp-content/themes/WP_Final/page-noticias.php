<?php get_header() ?>
	<?php the_post() ?>
	
 
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>



	 <table class="table table-striped table-hover" id="tabla">
	        <tr>
	         
	          <th>data</th>
	          
	        </tr>
	 </table>

	<button type="button" id="boton" class="btn btn-primary">Consumir datos</button>
	
 


	<script>
		
		$('#boton').on("click", function() {
			$.ajax({
		 	url: 'https://jsonplaceholder.typicode.com' + '/posts/',
		 	method: 'GET'   
			 }).then(function(data){	
		 	console.log(data); 

		 	    $('#tabla').append('<tr> <td>' + data + '</td> </tr>') 
		 		})

		});


	</script>

<?php get_footer() ?>