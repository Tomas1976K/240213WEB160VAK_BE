<?php get_header(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <p>Išskirtinai Sample page puslapio šablonas</p>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php get_footer(); ?>
