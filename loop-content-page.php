<?php
/**
 * Loop display content for page display
 * @package Wonderflux Girder child theme
 */
?>

<div id="post-<?php the_ID(); ?>" <?php wfx_post_class(''); ?>>

	<h2 class="entry-title"><?php the_title(); ?></h2>

	<div class="entry-content">

		<?php
		the_content('');
		wfx_edit_meta('intro=N&adminlink=N&postcontrols=N&pagecontrols=Nwfcontrols=N&widgetslink=N');
		wp_link_pages( array( 'before' => '<div class="nav-posts">' . __( 'Pages:', 'wonderflux' ), 'after' => '</div>' ) );
		?>

	</div>

	<?php comments_template( '', true ); ?>

</div>