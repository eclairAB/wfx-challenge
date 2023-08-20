<?php defined( 'ABSPATH' ) || exit; 

function getThumbnail($link) {
 
    if(strpos($link, 'youtu.be')) {
        $vi = explode('https://youtu.be/', $link)[1];
    }
    else {
        $vi = substr(parse_url($link, PHP_URL_QUERY), 2, 11);
    }
    echo "https://img.youtube.com/vi/$vi/0.jpg";
}

?>

<style>

</style>

<div class="fun-fact line-bg">
    <div class="container">
        <div class="fun-friday">
            <?php echo get_field('homepage_video_library_ribbon_heading'); ?>
        </div>
        <div class="fun-fact-owl owl-carousel">

            <?php
            if( have_rows('homepage_video_library_videos') ):
                while ( have_rows('homepage_video_library_videos') ) : the_row(); ?>

                    <div class="item">
                        <div class="fun-image">

                            <img src="<?php getThumbnail( get_sub_field('video_link') ); ?>" alt="Video" hidden>

                            <?php echo do_shortcode('[embedyt]'. get_sub_field('video_link') .'[/embedyt]'); ?>
                        </div>
                        <div class="fun-content">
                            <?php echo get_sub_field('video_description'); ?><br>
                            <a class="btn btn-primary" href="<?php echo get_sub_field('library_link')['url']; ?>">
                                <?php echo get_sub_field('library_link')['title']; ?>
                            </a>
                        </div>
                    </div>

                <? endwhile; 
            endif; ?>
        </div>
    </div>
</div>