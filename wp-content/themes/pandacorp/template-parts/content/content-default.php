<?php
/**
 * Template part for displaying a single post/page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</div>
