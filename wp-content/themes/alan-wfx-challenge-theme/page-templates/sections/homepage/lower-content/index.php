<?php defined( 'ABSPATH' ) || exit; 

if( have_rows('homepage_lower_sections') ):
    while( have_rows('homepage_lower_sections') ) : the_row();

        if( get_row_layout() == 'leftside_image' ):
            require 'leftside-image.php';

        elseif( get_row_layout() == 'right-side_mini_gallery' ):
            require 'right-side-mini-gallery/index.php';

        elseif( get_row_layout() == 'side-by-side_images' ):
            require 'side-by-side-images.php';

        endif;
    endwhile;
endif;
?>

