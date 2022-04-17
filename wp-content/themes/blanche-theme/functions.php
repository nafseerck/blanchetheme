<?php
include("wp_bootstrap_navwalker.php");
function Jquerrylib() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
add_action('wp_enqueue_scripts', 'Jquerrylib');

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
		
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
));
add_theme_support('post-thumbnails');
set_post_thumbnail_size('my_thumb',190,140,true);
// to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
register_nav_menus( array(
	'right_menu' => 'Header'
) );
register_nav_menus( array(
    'footer_menu' => 'Footer'
) );
register_nav_menus( array(
    'shop_menu' => 'Shop'
) );

/**
* change currency symbol to AED
*/

add_filter( 'woocommerce_currency_symbol', 'wc_change_uae_currency_symbol', 10, 2 );

function wc_change_uae_currency_symbol( $currency_symbol, $currency ) {
switch ( $currency ) {
case 'AED':
$currency_symbol = 'AED';
break;
}

return $currency_symbol;
}