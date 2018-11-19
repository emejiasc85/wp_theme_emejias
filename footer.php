<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emejias
 */

?>

	</div><!-- #content -->
	<footer class=" pt-md-5 border-top bg-dark text-white">
		
		<div class="container">
			<form action="/" role="search" method="get">
				<div class="input-group mb-3 input-group-lg">
					<input type="search" name="s" class="form-control footer-input" placeholder="Escribe lo que deseas buscar" aria-label="Escribe lo que deseas busca" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit">Buscar</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 p-2 text-center">
					<?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>
					<p class=" text-muted"><?php bloginfo( 'name' ); ?></p>
					<p class=" mb-3 text-muted">© 2016-2018</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center">
					<i class="glyph-footer-icon flaticon-envelope "></i>
					<h5>Correo</h5>
					<p><a href="mailto:emejiasc85@gmail.com.com?subject=Solicitud%20de%20cotizacion">emejiasc85@gmail.com</a></p>  
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center">
					<i class="glyph-footer-icon flaticon-phone-call"></i>
					<h5>Teléfono</h5>   
					<p><a href="tel:5460-6633">(502) 5460-6633</a></p> 
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center text-md-left">
					<h5>Visitar</h5>
					<?php include TEMPLATEPATH . "/template-parts/nav-footer.php"; ?>  
				</div>
			</div>
		</div>
	</footer>
	<script>
        // Changing the defaults
        window.sr = ScrollReveal({ reset: true });
        // Customizing a reveal set
        sr.reveal('.card', { duration: 1500 });
	</script>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
