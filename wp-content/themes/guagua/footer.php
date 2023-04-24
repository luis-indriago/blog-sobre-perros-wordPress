<?php

printf('
    </section>
    <footer class="container  footer">
');

        printf( '<div class="item  i-b  paged">' );
            wp_pagenavi(); 
        printf('</div>');

        $args = array(
            'theme_location' => 'social_nav',
            'container' => 'nav',
            'container_class' => 'item  nav social-nav',
        );
        wp_nav_menu( $args );
printf('
    </footer>
    <script src="'. get_bloginfo('template_url'). '/js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/57ead2e423.js" crossorigin="anonymous"></script>
    <script src="'. get_bloginfo('template_url'). '/js/codigos.js" crossorigin="anonymous"></script>
');

wp_footer();
printf('
</body>
</html>
');