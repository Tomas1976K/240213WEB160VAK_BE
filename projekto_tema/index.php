<?php get_header(); ?>

<br>

<div class="container">

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php else: ?>

        <p>No posts found. :(</p>

    <?php endif; ?>

</div>

<br>

<?php get_footer(); ?>