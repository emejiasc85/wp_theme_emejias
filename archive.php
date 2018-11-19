<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emejias
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="header" style="background-image: url(<?php echo( get_header_image() ); ?>);">
				<div class="container">
					<?php include TEMPLATEPATH ."/template-parts/nav.php"; ?>
					<div class="jumbotron">
						<h1 class="display-4"><?php the_archive_title(); ?></h1>
						<?php the_archive_description(); ?> 
						<p class="lead">
							<a class="btn btn btn-outline-danger btn-lg btn-outline-rounded" href="<?php echo get_permalink(27) ?>">Contáctanos</a>
						</p>
					</div>
				</div>
			</header>
			<div class="container">
					<?php if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;	 
					?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
