<?php defined( 'ABSPATH' ) || exit; ?>

<div class="home-team">
    <div class="team-banner">
        <div class="banner-image">
            <img src="<?php echo get_field('homepage_teams_left_side_image'); ?>" alt="Team" />
        </div>
    </div>
    <div class="team-content">
        <div class="container">
            <div class="team-wrap">
                <h4 class="optinal-h4"><?php echo get_field('homepage_teams_heading_emphasis_'); ?></h4>
                <h1><?php echo get_field('homepage_teams_heading'); ?></h1>
                <div class="row">

                <?php
                    if( have_rows('homepage_teams_mini_gallery') ):
                        while( have_rows('homepage_teams_mini_gallery') ) : the_row();  ?>

                            <div class="col-md-4">
                                <div class="team-box">
                                    <div class="team-image">
                                        <img src="<?php echo get_sub_field('thumbnail'); ?>" alt="Team" />
                                        <div class="team-hover">
                                            <div class="team-h-inner">
                                                <div class="comman-icon">
                                                    <span class="<?php echo get_sub_field('expanding_overlay_icon'); ?>"></span>
                                                </div>
                                                <div class="more-div">
                                                    <a class="learn-more yellow-link" href="<?php echo get_sub_field('link')['url']; ?>">
                                                        <?php echo get_sub_field('link')['title']; ?>
                                                        <span class="icon-arrow-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-title">
                                        <?php echo get_sub_field('caption'); ?>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                    endif;
                ?>
                    <!-- <div class="col-md-4">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="assets/images/team-img1.jpg" alt="Team" />
                                <div class="team-hover">
                                    <div class="team-h-inner">
                                        <div class="comman-icon">
                                            <span class="icon-cross-paw"></span>
                                        </div>
                                        <div class="more-div">
                                            <a class="learn-more yellow-link" href="#">learn more <span
                                                    class="icon-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                Dr. Leigh Samanowitz
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="assets/images/team-img2.jpg" alt="Team" />
                                <div class="team-hover">
                                    <div class="team-h-inner">
                                        <div class="comman-icon">
                                            <span class="icon-cross-paw"></span>
                                        </div>
                                        <div class="more-div">
                                            <a class="learn-more yellow-link" href="#">learn more <span
                                                    class="icon-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                Dr. Sara Simonson
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="assets/images/team-img3.jpg" alt="Team" />
                                <div class="team-hover">
                                    <div class="team-h-inner">
                                        <div class="comman-icon">
                                            <span class="icon-cross-paw"></span>
                                        </div>
                                        <div class="more-div">
                                            <a class="learn-more yellow-link" href="#">learn more <span
                                                    class="icon-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                Dr. Jenny Dakin
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="meet-button">
                    <a href="#" class="btn btn-secondary">Meet the Whole Team</a>
                </div>
            </div>
        </div>
    </div>
</div>