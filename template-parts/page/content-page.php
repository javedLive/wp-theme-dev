<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article>
	<?php the_title();?>
	<?php the_content();?>
	<div class="entry-content">
	<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'  => '</div>',
		));
	?>
	</div>

</article>