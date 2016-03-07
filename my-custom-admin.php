<?php
/**
 * Plugin Name: My-custom-admin
 * Version: 0.1-alpha
 * Description: PLUGIN DESCRIPTION HERE
 * Author: YOUR NAME HERE
 * Author URI: YOUR SITE HERE
 * Plugin URI: PLUGIN SITE HERE
 * Text Domain: my-custom-admin
 * Domain Path: /languages
 * @package My-custom-admin
 */

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {

	add_menu_page(
		__('My Admin', 'my-custom-admin'),
		__('My Admin', 'my-custom-admin'),
		'administrator',
		'my-custom-admin',
		'my_custom_admin'
	);

	add_submenu_page(
		'my-custom-admin',
		__('My Submenu', 'my-custom-admin'),
		__('My Submenu', 'my-custom-admin'),
		'administrator',
		'my-submenu',
		'my_submenu'
	);

}

function my_custom_admin() {
?>
<div class="wrap">
<h2>My Admin</h2>
</div>
<?php
}

function my_submenu() {
?>
<div class="wrap">
<h2>My Submenu</h2>
</div>
<?php
}
