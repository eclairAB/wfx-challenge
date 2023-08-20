<?php
/*
 * Template Name: Homepage
 * 
 * 
 */
?>

<!DOCTYPE html>
<!-- <html lang="en-us"> -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
    <body>
        <?php 

            get_header();
            require 'sections/homepage/slider.php';
            require 'sections/homepage/upper-content/index.php';
            require 'sections/homepage/team-section.php';
            require 'sections/homepage/lower-content/index.php';
            require 'sections/homepage/video-library.php';
            require 'sections/homepage/testi-blog.php';
            // the_content();


            get_footer();
        ?>
    </body>
</html>