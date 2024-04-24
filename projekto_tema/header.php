<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="contacts">
        <div class="container">
            <div class="left-toolbox">
                <a class="toolbox-group" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/location.svg" alt="location">
                    24 Olive Street, Prairie, NY 53590
                </a>
                <a class="toolbox-group" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/post.svg" alt="post">
                    whitecollar@gmail.com
                </a>
            </div>
            <div class="right-toolbox">
                <a class="toolbox-group" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/time.svg" alt="time">
                    Mon - Fri: 8:00 am - 5:00 pm
                </a>
                <a class="toolbox-icon" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/insta.svg" alt="insta">

                </a>
                <a class="toolbox-icon" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fasbuk.svg" alt="fasbuk">

                </a>
                <a class="toolbox-icon" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twiter.svg" alt="twiter">

                </a>
                <a class="toolbox-icon" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pintrest.svg" alt="pintrest">

                </a>
            </div>
        </div>
    </div>


    <nav>
        <div class="container">
            <a href="#">
                <img src="<?php the_field('logo', 'option'); ?>" alt="wicon">
            </a>
            

            <ul class="menu">
                <?php wp_nav_menu([
                    'menu' => 'header-menu',
                    'container'       => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                ]); ?>
                <li>
                    <a href="#" class="button">
                        <button>Get Consulting</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


<?php if (is_front_page()) { ?>

    <header>

        <!-- <div class="container"> -->

        <img class="header-background" src="<?php the_field('image', 'option'); ?>" alt="image1">

        <div class="overlay">

            <p>Welcome to Whitecollar Solution</p>

            <h1><?php  the_field('slogan', 'option'); ?></h1>

            <!-- <h1>The Best Value for <span class="bold">Business</span> and Corporation</h1> -->
            <p class="text">Collaboratively administrate empowered markets plug
                and play networks dynamically procrastinated </p>
            <a href="#" class="button2">
                <button>Get Consulting</button>
            </a>
        </div>

    </header>

<?php } ?>