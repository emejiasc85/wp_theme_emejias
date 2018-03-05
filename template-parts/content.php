<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emejias
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card border-top-0 border-right-0 border-left-0 pb-1 mb-5 border-bottom-shadow rounded-0">
		<div class="row">
			<div class="col-md-6">
				<div class="card-block">

					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="card-title font-weight-bold">', '</h1>' );
					else :
						the_title( '<h4 class="card-title font-weight-bold">', '</a></h4>' );
					endif;
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Editar <span class="screen-reader-text">%s</span>', 'emejias' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							emejias_posted_on();
							?>
							<br>
							<?php
							$post_tags = get_the_tags();
							if ($post_tags) {
							  foreach($post_tags as $tag) {
								echo '<a class="badge badge-info mr-2" href="'; echo bloginfo();
								echo '/?tag=' . $tag->slug . '" class="' . $tag->slug . '">' . $tag->name . '</a>';
							  }
							}
							//emejias_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					<?php 
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'emejias' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );
				
					?>
					<a class="btn btn btn-outline-danger btn-outline-rounded btn-lg mt-3" href="<?php get_permalink() ?>" role="button">Ver proyecto</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="nav-window bg-secondary rounded-top pl-2">
					<span class="nav-window-buttom rounded bg-light d-inline-block"></span>
					<span class="nav-window-buttom rounded bg-light d-inline-block"></span>
					<span class="nav-window-buttom rounded bg-light d-inline-block"></span>
				</div>
				<?php emejias_post_thumbnail(); ?>
			</div>
		</div>
		<?php 
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'emejias' ),
			'after'  => '</div>',
		) );
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
