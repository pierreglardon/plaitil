<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<header id="header">
		<a href="<?php bloginfo('url') ?>">
			<img src="<?php bloginfo('template_directory') ?>/assets/plaitil/logo-red.svg" alt="<?php bloginfo('name') ?>" />
		</a>
	</header>

	<nav id="navigation">
		<aside onclick="menuToggle()" class="menuToggle">
			<a><span></span> menu</a>
		</aside>
		<section>
			<a href="<?php bloginfo('url') ?>">
				<img src="<?php bloginfo('template_directory') ?>/assets/plaitil/logo-black.svg" alt="<?php bloginfo('name') ?>" class="logo" />
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
		</section>
	</nav>

	<section class="container">
