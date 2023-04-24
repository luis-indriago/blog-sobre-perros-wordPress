<?php
printf('<main class="container  main">');
  
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            
            $template_html = '
                <a href="%s">
                    <figure class="item  i-b  ph100 sm50 md33 lg25  main-items">
                        <img src="%s">
                        <figcaption><h3>%s</h3></figcaption>
                    </figure>
                </a>       
            ';
            printf(
                $template_html,
                get_permalink(),
                main_image_url('thumbnail'), 
                get_the_title()
            ); 
        }
    }else{
        printf('<p class="error">No hay entradas</p>');
    }
    rewind_posts();
          
printf('</main>'); 