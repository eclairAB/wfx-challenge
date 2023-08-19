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
            // the_content();


            get_footer();
        ?>
    </body>
</html>