<?php defined( 'ABSPATH' ) || exit; ?>

<div class="welcome-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 mobile-order2">
                <div class="welcome-box team-box">
                    <div class="team-image">
                        <img src="<?php echo get_sub_field('featured_image'); ?>" alt="Welcome" />
                    </div>
                    <div class="team-title">
                        <?php echo get_sub_field('featured_image_caption'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="welcome-content">
                    <h4 class="optinal-h4"><?php echo get_sub_field('heading_emphasis'); ?></h4>
                    <h1><?php echo get_sub_field('heading'); ?></h1>
                    <?php echo get_sub_field('section_content'); ?>
                    <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-primary"><?php echo get_sub_field('link')['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>