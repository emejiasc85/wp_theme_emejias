<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package emejias
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<header class="header" style="background-image: url(<?php echo( get_header_image() ); ?>);">
				<div class="container">
					<?php include TEMPLATEPATH ."/template-parts/nav.php"; ?>
					<div class="jumbotron">
						<h1 class="display-4">Resultados para: <strong> <?php echo get_search_query()?> </strong></h1>
					</div>
				</div>
			</header>
			<?php if ( have_posts() ) : ?>
			<div class="container">
				<?php
				/* Start the Loop */
				
				while ( have_posts() ) :
					the_post();
					if (is_search() && ($post->post_type==’page’)) continue;
					get_template_part( 'template-parts/content');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</div>
			


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
