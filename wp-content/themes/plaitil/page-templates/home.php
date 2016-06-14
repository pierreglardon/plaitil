<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>

<div class="owl-carousel owl-theme owl-home-slider row">
    <?php
        $catquery = new WP_Query( 'cat=2&posts_per_page=2' );
        while($catquery->have_posts()) : $catquery->the_post();
    ?>
        <div class="item">
            <aside class="image-1">
                <img src="<?php the_field('image_du_projet_1'); ?>" alt="<?php the_title() ?>" />
            </aside>
            <aside class="image-2">
                <img src="<?php the_field('image_du_projet_2'); ?>" alt="<?php the_title() ?>" />
            </aside>
            <h2>
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                </a>
            </h2>
            <h3>
                <a href="<?php the_permalink() ?>">
                    <?php the_field('sous-titre'); ?>
                </a>
            </h3>
        </div>
    <?php endwhile; ?>
    <div class="item contact">
        <section>
            <h2>
                Vous avez un projet en tête?
            </h2>
            <h3>
                <a href="#contact">
                    Contactez-nous <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </h3>
        </section>
    </div>
</div>

<div class="row content" id="agence">
    <div class="columns small-12">
        <h2>Agence “Plait-il?”</h2>
        <h3>Exploratrice en web  depuis 2005</h3>
    </div>
    <aside class="columns large-6">
        <img src="<?php bloginfo('template_directory') ?>/assets/plaitil/agence.jpg" alt="<?php bloginfo('name') ?>" />
    </aside>
    <aside class="columns large-7">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile;?>
    </aside>
</div>

<?php get_footer();
