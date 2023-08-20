<?php defined( 'ABSPATH' ) || exit; 

    $counter = [
        'first' => 1,  
        'second' => 1,  
    ];

    function batchGallery($x, $end_tag=false) {
        global $counter;
        if(in_array($counter[$x], [1,4])) {
            if($end_tag && $counter[$x] == 4) {
                echo '</div></div>';
            }
            elseif(!$end_tag && $counter[$x] == 1) {
                echo '<div class="item"><div class="row">';
            }
        }
        if($end_tag) {
            $counter[$x]++;
        }
    }

?>

<div class="home-services line-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <h4 class="optinal-h4"><?php echo get_sub_field('heading_emphasis'); ?></h4>
                    <h1><?php echo get_sub_field('heading'); ?></h1>
                    <?php echo get_sub_field('section_content'); ?>
                    <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-primary"><?php echo get_sub_field('link')['title']; ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <div class="service-owl owl-carousel owl-theme">

                            <?php if( have_rows('mini_gallery') ):
                                while( have_rows('mini_gallery') ) : the_row(); 
                                
                                    batchGallery('first');
                                ?>

                                <div class="col-md-6">
                                    <div class="service-box">
                                        <div class="service-image">
                                            <img src="<?php echo get_sub_field('thumbnail'); ?>" alt="Service" />
                                        </div>
                                        <div class="service-info">
                                            <div class="service-inner">
                                                <div class="service-icon comman-icon">
                                                    <span class="<?php echo get_sub_field('expanding_overlay_icon'); ?>"></span>
                                                </div>
                                                <div class="service-title"><?php echo get_sub_field('caption'); ?></div>
                                                <a class="learn-more" href="<?php echo get_sub_field('link')['url']; ?>">
                                                    <?php echo get_sub_field('link')['title']; ?> 
                                                    <span class="icon-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                                    batchGallery('first', true);
                                endwhile;
                            endif; ?>
                    </div>
                </div>
                <div class="d-lg-none">
                    <div class="service-owl owl-carousel owl-theme">

                        <?php if( have_rows('mini_gallery') ):
                                while( have_rows('mini_gallery') ) : the_row(); ?>
                            <div class="item">
                                <div class="service-box">
                                    <div class="service-image">
                                        <img src="<?php echo get_sub_field('thumbnail'); ?>" alt="Service" />
                                    </div>
                                    <div class="service-info">
                                        <div class="service-inner">
                                            <div class="service-icon comman-icon">
                                                <span class="<?php echo get_sub_field('expanding_overlay_icon'); ?>"></span>
                                            </div>
                                            <div class="service-title"><?php echo get_sub_field('caption'); ?></div>
                                            <a class="learn-more" href="<?php echo get_sub_field('link')['url']; ?>">
                                                <?php echo get_sub_field('link')['title']; ?>
                                                <span class="icon-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                            endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>