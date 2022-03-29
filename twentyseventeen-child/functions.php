<?
function mis_estilos()
{
    wp_enqueue_style( 'child-theme-css', '/home/dam2a/docker/Wordpress/html/wp-content/themes/twentyseventeen/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mis_estilos' );
php ?>