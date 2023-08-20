<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alan-wfx-challenge-theme
 */

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?php echo get_field('homepage_footer_site_logo'); ?>" alt="University Animal Clinic" />
                    </a>
                </div>
                <div class="footer-social">
                    <ul>
                        <?php
                        if( have_rows('homepage_footer_social_media_links') ):
                            while ( have_rows('homepage_footer_social_media_links') ) : the_row(); ?>

                                <li>
                                    <a href="<?php echo get_sub_field('soc_med_link'); ?>" class="<?php echo get_sub_field('soc_med_class'); ?>"></a>
                                </li>

                            <?php
                            endwhile;
                        endif; ?>
                    </ul>
                </div>
            </div>

            <?php
            if( have_rows('homepage_footer_other_informations') ):
                while ( have_rows('homepage_footer_other_informations') ) : the_row(); 
                    if( get_row_layout() == 'contact_information' ):?>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-contact">
                                <h4><?php echo get_sub_field('heading'); ?></h4>
                                <p>
                                    <?php echo get_sub_field('address'); ?><br>
                                    <a class="learn-more" href="<?php echo get_sub_field('hyperlink')['url']; ?>">
                                        <?php echo get_sub_field('hyperlink')['title']; ?>
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </p>
                                <p>
                                    Phone: <a class="color-body" href="tel:<?php echo get_sub_field('contact'); ?>"><?php echo get_sub_field('contact'); ?></a>
                                </p>
                            </div>
                        </div>

                    <? elseif( get_row_layout() == 'no_link'): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-contact">
                                <h4><?php echo get_sub_field('heading'); ?></h4>
                                <p>
                                    <?php
                                    if( have_rows('items') ):
                                        while ( have_rows('items') ) : the_row();
                                            echo get_sub_field('item') . '<br>';
                                    endwhile;
                                    endif;        
                                    ?>
                                </p>
                            </div>
                        </div>

                    <? elseif( get_row_layout() == 'awards__certifications'): ?>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-contact">
                                <h4>AWARDS & ASSOCIATIONS</h4>
                                <ul class="award-logos">
                                    <?php
                                    if( have_rows('images') ):
                                        while ( have_rows('images') ) : the_row();
                                            echo '
                                            <li>
                                                <img
                                                    src="' . get_sub_field('image')['url'] . '"
                                                    alt="' . get_sub_field('image')['alt'] . '"
                                                />
                                            </li>';
                                    endwhile;
                                    endif;        
                                    ?>
                                </ul>
                            </div>
                        </div>

                    <?php
                    endif;
                endwhile;
            endif; ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="footer-left">
                    <ul class="footer-menu">

                        <?php
                        if( have_rows('homepage_footer_lower_links') ):
                            while ( have_rows('homepage_footer_lower_links') ) : the_row();
                                echo '
                                <li>
                                    <a href="' . get_sub_field('link')['url'] . '">
                                        '. get_sub_field('link')['title'] .'
                                    </a>
                                </li>';

                            endwhile;
                        endif; ?>

                    </ul>
                    <div class="copyright">
                        <?php echo get_field('homepage_footer_copyright') ?>
                    </div>
                </div>
                <div class="back-top">
                    <a class="learn-more yellow-link" href="#"><?php echo get_field('homepage_footer_auto-scroll_text') ?> <span class="icon-arrow-up"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
