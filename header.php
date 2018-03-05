<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emejias
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link  rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	  <header class="header" style="background-image: url(<?php echo( get_header_image() ); ?>);">
            <div class="container">
				<?php include TEMPLATEPATH ."/template-parts/nav.php"; ?>
                <div class="jumbotron">
                    <h1 class="display-4"><?php echo get_bloginfo( 'description', 'display' ); ?></h1>
					<?php  dynamic_sidebar('slogan'); ?>
                    <p class="lead">
                      <a class="btn btn btn-outline-danger btn-lg btn-outline-rounded" href="#" role="button">Contáctanos</a>
                    </p>
                </div>
            </div>
        </header>
	<div id="content" class="site-content">
