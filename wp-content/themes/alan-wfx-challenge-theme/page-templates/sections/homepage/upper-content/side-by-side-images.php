<?php defined( 'ABSPATH' ) || exit; ?>

<style>
    .exotic-care {
        display: inline-block;
        width: 100%;
        background: #fafafa url(<?php echo get_sub_field('left_image'); ?>) no-repeat 0 bottom / 500px auto;
    }
</style>

<div class="exotic-care">
    <div class="container">
        <div class="exotic-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7 full-width-children">
                    <h4 class="optinal-h4"><?php echo get_sub_field('heading_emphasis'); ?></h4>
                    <h1><?php echo get_sub_field('heading'); ?></h1>

                    <?php echo get_sub_field('section_content'); ?>

                    <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-primary">
                        <?php echo get_sub_field('link')['title']; ?>
                    </a>
                </div>
                <div class="col-lg-5">
                    <div class="exotic-images">
                        <div class="exotic-image1 team-box">
                            <div class="team-image">
                                <img src="<?php echo get_sub_field('top_right_image'); ?>" alt="Exotic" />
                            </div>
                            <div class="team-title">turtle</div>
                        </div>
                        <div class="exotic-image2 team-box">
                            <div class="team-image">
                                <img src="<?php echo get_sub_field('bottom_right_image'); ?>" alt="Exotic" />
                            </div>
                            <div class="team-title"><?php echo get_sub_field('bottom_right_image_caption'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const colLg7 = document.querySelector('.full-width-children > div.col-lg-7');
    const parent = colLg7.parentElement;    
    while (colLg7.firstChild) {
        parent.insertBefore(colLg7.firstChild, colLg7);
    }    
    parent.removeChild(colLg7);
});
</script>