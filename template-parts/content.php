<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EriPress
 */

?>
<div class="col s12 m4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="card">
			<div class="card-image">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} else {
					echo '<img src="wp-content/themes/eripress/img/default.jpg" alt="thumbnail">';
				}
				?>
				<span class="card-title">
					<?php
					if ( is_single() ) {
						the_title( '<span class="card-title">', '</span>' );
					} else {
						the_title( '<span class="card-title">', '</span>' );
					}
					?>
				</span>
			</div>


			<div class="card-content">
				<?php
				if ( 'post' === get_post_type() ) : ?>
				Posted <i class="tiny material-icons">schedule</i><time> <?php the_date(); ?></time> in <i class="tiny material-icons">label</i><?php the_category(", "); ?>
				<?php
				endif;

					the_excerpt( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'eri' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eri' ),
						'after'  => '</div>',
					) );
				?>
			</div>

			<div class="card-action">
				<a href="<?php the_permalink(); ?>">Read on</a>
			</div>
		</div>
	</article><!-- #post-## -->
</div>
