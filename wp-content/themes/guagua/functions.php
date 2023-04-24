<?php
/*
El archivo functions.php es como una biblioteca personal de funciones, es una manera 
fácil de agregar o modificar el comportamiento por defecto de WordPress. Se comporta 
exactamente igual que un plugin, añadiendo características y funcionabilidad a un tema, 
y se puede utilizar tanto para definir nuevas funciones PHP como para modificar las que
ya incorpora WordPress.
*/

/*
Hooks -	https://codex.wordpress.org/Plugin_API
		Listado de acciones - http://codex.wordpress.org/Plugin_API/Action_Reference
		Listado de filtros - http://codex.wordpress.org/Plugin_API/Filter_Reference

https://codex.wordpress.org/Function_Reference/add_action
https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
https://codex.wordpress.org/Function_Reference/add_theme_support
https://codex.wordpress.org/Function_Reference/the_post_thumbnail
https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/
https://codex.wordpress.org/Function_Reference/add_filter


------------------------------------------------------------------------------------------
para buscar documentación también
https://developer.wordpress.org/reference/
------------------------------------------------------------------------------------------


https://codex.wordpress.org/Widgets_API
https://developer.wordpress.org/reference/functions/wp_widgets_init/
https://codex.wordpress.org/Function_Reference/register_sidebar/
https://codex.wordpress.org/Function_Reference/register_sidebars/
https://codex.wordpress.org/Function_Reference/get_post_thumbnail_id/
*/

function custom_theme_setup(){
    add_theme_support( 'post-thumbnails' );

    $locations = array(
        'main_nav' => 'Navegación Principal',
        'social_nav' => 'Navegación Social Media'
    );
    
    register_nav_menus( $locations );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );


function read_more(){
    $url_post = get_permalink();
    return "&nbsp;<a href='$url_post'><small><i>leer más</small></i></a>";
}

add_filter( 'excerpt_more', 'read_more' );


function widgets_activation(){
    //register_sidebar();
    //register_sidebar();
    $args = array(
        //'name' => __('Sidebar %d'),
        //'id' => 'sidebar',
        //'description' => 'esta es la descripción de este widget',
        //'class' => 'widgets',
        'before_widget' => '<div class="item widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    );
    register_sidebars(3,$args);

    register_sidebar( 
        array(
            'name' =>  'widget personalizado',
            //'id' => 'sidebar',
            //'description' => 'esta es la descripción de este widget',
            //'class' => 'widgets',
            'before_widget' => '<div class="item  widgets  other-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'widgets_activation' );

function main_image_url( $size ){
    global $post;

    $image_id = get_post_thumbnail_id( $post->id );
    $main_image = wp_get_attachment_image_src( $image_id, $size );
    // 0 = ruta, 1 = anchura, 2 = altura, 3 = boolean
    
    return $main_image[0];
}