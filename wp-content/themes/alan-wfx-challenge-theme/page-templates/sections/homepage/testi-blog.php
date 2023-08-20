<?php defined( 'ABSPATH' ) || exit; ?>

<div class="testi-blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonials">
                    <div class="comman-icon">
                        <span class="icon-quotes"></span>
                    </div>
                    <h1><?php echo get_field('homepage_testimonial_heading'); ?></h1>
                    <a class="btn btn-primary" href="<?php echo get_field('homepage_testimonial_redirect_button_link')['url']; ?>"><?php echo get_field('homepage_testimonial_redirect_button_link')['title']; ?></a>
                    <div class="testi-owl owl-carousel">

                        <?php
                        if( have_rows('homepage_testimonial_testimonies') ):
                            while ( have_rows('homepage_testimonial_testimonies') ) : the_row(); ?>

                                <div class="item">
                                    <p><?php echo get_sub_field('testimony'); ?></p>
                                    <b>- <?php echo get_sub_field('name'); ?></b>
                                </div>

                            <?php
                            endwhile;
                        endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-blog">
                    <div class="blog-title">
                        <h4 class="optinal-h4"><?php echo get_field('homepage_featured_blog_heading'); ?></h4>
                        <a class="btn btn-secondary" href="<?php echo get_field('homepage_featured_blog_upper_button_link'); ?>"><?php echo get_field('homepage_featured_blog_upper_button_label'); ?></a>
                    </div>
                    <div class="blog-main">
                        <div class="blog-image">
                            <img src="<?php echo get_field('homepage_featured_blog_thumbnail'); ?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-inner">
                                <h4><?php echo get_field('homepage_featured_blog_title'); ?></h4>
                                <p><?php echo get_field('homepage_featured_blog_excerpt'); ?>&nbsp;[...]</p>
                                <div class="readmore">
                                    <a class="btn btn-primary" href="<?php echo get_field('homepage_featured_blog_redirect_link'); ?>"><?php echo get_field('homepage_featured_blog_redirect_label'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>