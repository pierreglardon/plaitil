<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" class="content" role="main">


<?php while ( have_posts() ) : the_post(); ?>

	<header class-"row">
		<div class="columns small-12">
			<h2>Agence “Plait-il?”</h2>
	        <h3>Exploratrice en web  depuis 2005</h3>
			<hr />
			<div>
				<?php the_content() ?>
			</div>
			<hr />
		</div>
	</header>
	<section class="row">
		<aside class="columns large-3">
			<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
			<h4><?php the_field('date_du_projet') ?></h4>
			<a href="#!site" class="p-button"><span>Voir le site</span></a>
			<div class="network">
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
		</aside>
		<div class="columns large-9 text-center">
			<div class="projet-img"><img src="<?php the_field('image_du_projet_1') ?>" alt="<?php the_title() ?>" /></div>
			<div class="projet-img"><img src="<?php the_field('image_du_projet_2') ?>" alt="<?php the_title() ?>" /></div>
			<div class="projet-img"><img src="<?php the_field('image_du_projet_3') ?>" alt="<?php the_title() ?>" /></div>

		</div>
	</section>


<?php endwhile;?>

</div>
<?php get_footer();
