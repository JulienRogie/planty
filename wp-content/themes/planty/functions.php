<?php
/**
 ** activation theme
 **/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css ');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
 
}


add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {
   if (is_user_logged_in() && $args->menu_class === "hfe-nav-menu") {
        $items .= '<li class="tikchbila menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="'. get_admin_url() .'"> Admin </a></li>';
    }
    return $items;
}

?>