<?php
/**
 * Loop display content used as a fallback in all conditions when a loop-content-LOCATION.php doesn't exist in this child theme
 * @package Wonderflux Girder child theme
 */
?>

<div id="post-<?php the_ID(); ?>" <?php wfx_post_class(''); ?>>

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Read %s', 'wonderflux' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>

	<div class="entry-content">

		<?php

		// Content
		the_content('');

		// Edit link
		wfx_edit_meta('intro=N&adminlink=N&postcontrols=N&pagecontrols=Nwfcontrols=N&widgetslink=N');

		?>

	</div>

	<?php
	// Link pages
	wp_link_pages( array( 'before' => '<div class="nav-posts">' . __( 'Pages:', 'wonderflux' ), 'after' => '</div>' ) );
	?>

</div>


