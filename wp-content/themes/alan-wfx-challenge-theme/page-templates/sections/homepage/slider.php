<?php defined( 'ABSPATH' ) || exit; ?>

<div class="home-slider owl-carousel owl-theme">
    <?php
        if( have_rows('homepage_slider') ):
            while( have_rows('homepage_slider') ) : the_row();
                $image = get_sub_field('image');
                $emphasis_heading = get_sub_field('emphasis_heading');
                $heading = get_sub_field('heading');
                $external_link = get_sub_field('link');

                $btn_link = $external_link['url'];
                $btn_text = $external_link['title'];
                ?>
                
                <div class="item">
                    <div class="slide-image">
                        <img src="<?php echo $image; ?>" alt="Slide" />
                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <h4 class="optinal-h4"><?php echo $emphasis_heading; ?></h4>
                            <h3><?php echo $heading; ?></h3>
                            <a href="<?php echo $btn_link ?>" class="btn btn-primary"><?php echo $btn_text ?></a>
                        </div>
                    </div>
                </div>

            <?php endwhile;
        endif;
    ?>
</div>