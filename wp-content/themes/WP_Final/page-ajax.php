<?php get_header() ?>
	<?php the_post() ?> 
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>




	 <header> 
        <p class="message2"></p> 
        
         
         
    </header> 

  

     <table class="table table-striped table-hover" id="tabla">
        <tr>
            <th>Insulto1</th>
            <th>Insulto2</th>
            <th>Insulto3</th> 
        </tr>

        <tr id = "insul1"></tr>
     

    </table>






    <script> 
        $(document).ready(function (){ 
            var fetch = { 
                url: 'http://foaas.com/ballmer/Javiera/Javiera/friend', 
                type: 'GET', 
                dataType: 'json', 
            } 
            $.ajax(fetch) 
            .done(function(data) { 
                var div_content = $('.message4') 
                div_content.html(data.message) 
                $('#insul1').append('<td>' + data.message + '</td> ')  

            }) 
            .fail(function(error) { 
                // console.log(error) 
            }) 
            .always(function() { 
                // console.log("complete") 
            }) 
        }) 
    </script> 


     <script> 
        $(document).ready(function (){ 
            var fetch = { 
                url: 'http://foaas.com/bday/Javiera/friend', 
                type: 'GET', 
                dataType: 'json', 
            } 
            $.ajax(fetch) 
            .done(function(data) { 
                $('#insul1').append('<td>' + data.message + '</td>')  
            }) 
            .fail(function(error) { 
                // console.log(error) 
            }) 
            .always(function() { 
                // console.log("complete") 
            }) 
        }) 
    </script> 



    
     <script> 
        $(document).ready(function (){ 
            var fetch = { 
                url: 'http://foaas.com/bye/friend', 
                type: 'GET', 
                dataType: 'json', 
            } 
            $.ajax(fetch) 
            .done(function(data) { 
                $('#insul1').append('<td>' + data.message + '</td>')  
            }) 
            .fail(function(error) { 
                // console.log(error) 
            }) 
            .always(function() { 
                // console.log("complete") 
            }) 
        }) 
    </script> 


<!--
     
    <script> 
        $(document).ready(function (){ 
            var fetch = { 
                url: 'http://foaas.com/bday/Javiera/friend', 
                type: 'GET', 
                dataType: 'json', 
            } 
            $.ajax(fetch) 
            .done(function(data) { 
                var div_content = $('.message2') 
                div_content.html(data.message)  

            }) 
            .fail(function(error) { 
                // console.log(error) 
            }) 
            .always(function() { 
                // console.log("complete") 
            }) 
        }) 
    </script> 


    



   
   
-->



<?php get_footer() ?>