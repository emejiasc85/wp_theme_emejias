<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emejias
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title text-center"><?php esc_html_e( 'Upss!! no encontramos lo que buscas', 'emejias' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p class="text-center">' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'emejias' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="text-center"><?php esc_html_e( 'Lo sentimos, no hemos encontrado lo que buscas. prueba con diferentes palabras.', 'emejias' ); ?></p>
			<?php
			//get_search_form();

		else :
			?>

			<p class="text-center"><?php esc_html_e( 'Parece que no tenemos lo que buscas. Puedes intentar con otras palabras.', 'emejias' ); ?></p>
			<?php
			//get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
