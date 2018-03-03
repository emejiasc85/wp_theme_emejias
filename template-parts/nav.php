<nav class="navbar navbar-expand-md navbar-light bg-faded">
	<?php
		if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
		}
  	?>
	<a href="" class="brand ml-1"><?php bloginfo( 'name' ); ?></a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<?php
	wp_nav_menu([
		'menu'            => 'top',
		'theme_location'  => 'top',
		'container'       => 'div',
		'container_id'    => 'bs4navbar',
		'container_class' => 'collapse navbar-collapse',
		'menu_id'         => false,
		'menu_class'      => 'navbar-nav ml-auto',
		'depth'           => 2,
		'fallback_cb'     => 'bs4navwalker::fallback',
		'walker'          => new bs4navwalker()
	]);
	?>
</nav>
