<?php get_header() ?>
	<?php the_post() ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>


	 <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Cuenta de mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"> Nunca compartas tu e-mail.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Clave</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    


<?php get_footer() ?>´`
