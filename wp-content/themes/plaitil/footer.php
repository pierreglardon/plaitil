<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	</section>

	<footer id="footer">
		<div class="row text-center network">
			<a href="#!facebook">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
			<a href="#!">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
			<a href="#!">
				<i class="fa fa-github-alt" aria-hidden="true"></i>
			</a>
			<a href="#!">
				<i class="fa fa-pinterest-p" aria-hidden="true"></i>
			</a>
		</div>
		<div class="row" data-equalizer>
			<div class="large-8 columns" data-equalizer-watch>
				<div id="map"></div>
			</div>
			<div class="large-3 columns text-center" data-equalizer-watch>
				<section>
					<img src="<?php bloginfo('template_directory') ?>/assets/plaitil/logo-black.svg" alt="<?php bloginfo('name') ?>" class="logo" />
					<p>
						Plait-il? / 5 rue du Bûcher,<br />
						13007 Marseille
					</p>
				</section>
			</div>
		</div>
	</footer>
	<footer class="black">
		Copyright: Plait-il? / 2016  -  <a href="#!mentions">Mentions légales</a>
	</footer>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
