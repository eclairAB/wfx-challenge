<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alan-wfx-challenge-theme
 */

?>

<div class="covid-message">
    <div class="container">
        <div class="covid-text">
            <?php echo get_field('homepage_suspendable_nav_banner_text'); ?>
        </div>
        <div class="covid-link">
            <a class="learn-more" href="<?php echo get_field('homepage_suspendable_nav_link')['url']; ?>">
                <?php echo get_field('homepage_suspendable_nav_link')['title']; ?>
                <span class="icon-arrow-right"></span>
            </a>
        </div>
        <a href="javascript:void(0);" class="icon-close removeit"></a>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-logo">
                <a href="#">
                    <img src="<?php echo get_field('homepage_sticky_nav_site_logo'); ?>" alt="University Animal Clinic" />
                </a>
            </div>
            <div class="header-right">
                <div class="header-content">
                    <div class="call-us">
                        <span>
                            <?php echo get_field('homepage_sticky_nav_tel_number_subheading'); ?>
                        </span>
                        <a href="tel:<?php echo get_field('homepage_sticky_nav_tel_number'); ?>">
                            <?php echo get_field('homepage_sticky_nav_tel_number'); ?>
                        </a>
                    </div>
                    <div class="online-request">
                        <a href="#" class="btn btn-secondary">Online Pharmacy</a>
                        <a href="#" class="btn btn-primary">Request an Appointment</a>
                    </div>
                </div>
                <div class="header-bottom">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="menu-text">Menu</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                            <?php
                                # LEVEL 1 LOOP
                                if( have_rows('homepage_sticky_nav_menu_items') ):
                                    while ( have_rows('homepage_sticky_nav_menu_items') ) : the_row();
                                        if( get_row_layout() == 'direct_link' ):
                                            $link1 = get_sub_field('link'); ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo $link1['url'] ?>"><?php echo $link1['title'] ?></a>
                                            </li>

                                        <?php elseif( get_row_layout() == 'nested' ):                                             
                                            $label1 = get_sub_field('label'); ?>
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                                    data-toggle="dropdown"><?php echo $label1; ?>
                                                </a>

                                                    <?php if( have_rows('sub_menu_item') ):

                                                        # LEVEL 2 LOOP
                                                        echo '<ul class="submenu dropdown-menu">';
                                                        while ( have_rows('sub_menu_item') ) : the_row();
                                                            if( get_row_layout() == 'direct_link' ):
                                                                $link1 = get_sub_field('link'); ?>

                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="<?php echo $link1['url'] ?>"><?php echo $link1['title'] ?></a>
                                                                    </li>
                                                            <?php
                                                            elseif( get_row_layout() == 'nested' ): 
                                                                
                                                                ?>
                                                                
                                                                    <li class="nav-item"><a class="nav-link" href="#">
                                                                        <a class="nav-link" href="#"><?php echo get_sub_field('label'); ?></a>
                                                                        <ul class="submenu dropdown-menu">

                                                                            <?php while( have_rows('submenu_items') ) : the_row(); 
                                                                                $link2 = get_sub_field('link');
                                                                            ?>
                                                                                
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="<?php echo $link2['url']; ?>">
                                                                                    <?php echo $link2['title']; ?>
                                                                                </a>
                                                                            </li>

                                                                            <?php endwhile; ?>

                                                                        </ul>
                                                                    </li>
                                                            <?php endif;
                                                        endwhile;
                                                        echo '</ul>';
                                                    else :
                                                    endif; ?>
                                            </li>

                                        <?php endif;

                                    endwhile;
                                else :
                                endif;
                            ?>


                                
                                
                            </ul>
                        </div>
                    </nav>
                    <div class="header-search">
                        <a href="javascript:void(0);" class="icon-search"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="searchbar">
        <div class="container">
            <div class="searchbar-inner">
                <input type="text" class="form-control" placeholder="Search here..." />
                <button type="submit" class="btn search-btn icon-search"></button>
            </div>
        </div>
    </div>

    <div class="mobile-bottom-header">
        <div class="call-us">
            <span>call us </span>
            <a href="tel:9413557707">941-355-7707</a>
        </div>
    </div>
</header>