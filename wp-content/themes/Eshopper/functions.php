<?php
require_once('wp_bootstrap_navwalker.php');
add_theme_support( 'woocommerce' );
/*Latest Jquery*/
function my_latest_jquery() {
		wp_enqueue_script('jquery');
}
add_action('wp_head', 'my_latest_jquery');

	// add menu support and fallback menu if menu doesn't exist
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'eshoppers' ),
    'shop_menu' => __( 'Shop Menu', 'eshoppers' ),
) );
























?>