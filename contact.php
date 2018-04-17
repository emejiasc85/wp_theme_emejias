<?php
/* template Name: contact*/ 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emejias
 */

get_header();
while ( have_posts() ) : the_post();

?>
<header class="header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>);">
	<div class="container">
		<?php include TEMPLATEPATH ."/template-parts/nav.php"; ?>
		<div class="jumbotron col-xs-12 col-sm-8 col-lg-6">
			<h1 class="display-4"><?php single_post_title(); ?></h1>
			<p class="lead">
				<?php  echo $post->copy  ?>
			</p>
		</div>
	</div>	
</header>
<div id="content" class="site-content">
	<div class="container">
		<main id="main" class="site-main col-xs-12 col-sm-6 offset-sm-3">
			<?php the_content(); ?>
		</main><!-- #main -->	
	</div><!-- #primary -->
<?php
endwhile; // End of the loop.

get_footer();
