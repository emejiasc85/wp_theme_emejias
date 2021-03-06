<?php
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


?> 
	<header class="header" style="background-image: url(<?php echo( get_header_image() ); ?>);">
		<div class="container">
			<?php include TEMPLATEPATH ."/template-parts/nav.php"; ?>
			<div class="jumbotron">
				<h1 class="display-4"><?php echo get_bloginfo( 'description', 'display' ); ?></h1>
				<?php  dynamic_sidebar('slogan'); ?>
				<p class="lead">
					<a class="btn btn btn-outline-danger btn-lg btn-outline-rounded" href="<?php echo get_permalink(27) ?>">Contáctanos</a>
				</p>
			</div>
		</div>
	</header>
	<div id="content" class="site-content">


<?php

get_template_part( 'template-parts/services', 'services' );
?>
<div class="row bg-light mt-4 porfolio">
	<div class="container">
		<div class="mt-5 mb-5 border-bottom-shadow rounded-0">
			<h4 class="text-uppercase font-weight-normal d-inline pr-3">Portafolio</h4>
		</div>

		<?php
		query_posts( 'category_name=Portafolio&posts_per_page=10' );
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
</div>
<?php

//get_sidebar();
get_template_part( 'template-parts/prices', 'prices' );

get_footer();
