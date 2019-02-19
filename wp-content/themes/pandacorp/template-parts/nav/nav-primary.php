<?php
/**
 * Displays the main menu.
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */
?>

<div id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Menu', THEME_TEXTDOMAIN ); ?>">
	<?php
	wp_nav_menu(
		[
			'theme_location' => 'main-menu',
			'menu_class'     => 'main-menu',
			'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		]
	);
	?>
</div>
