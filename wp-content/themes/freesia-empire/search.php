<?php
/**
 * The template for displaying search results.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
get_header();
	$freesiaempire_settings = freesiaempire_get_theme_options();	
	global $freesiaempire_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'freesiaempire_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="primary">
	<?php }
	}?>
	<div id="main">
	<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
			get_template_part( 'content', get_post_format() );
		}
	}
	else { ?>
	<h2 class="entry-title">
		<?php get_search_form(); ?>
		<p>&nbsp; </p>
		<?php _e( 'No Posts Found.', 'freesia-empire' ); ?>
	</h2>
	<?php
	} ?>
	</div> <!-- #content -->
	<?php get_template_part( 'navigation', 'none' );
if( 'default' == $layout ) { //Settings from customizer
	if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}
get_sidebar();
get_footer(); ?>