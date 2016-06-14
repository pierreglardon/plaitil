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
	</footer>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
