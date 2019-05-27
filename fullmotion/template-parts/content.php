<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fullmotion
 */

?>

<div id="main">
    <div class="inner">
        <!-- Boxes -->
        <div class="thumbnails" <?php post_class(); ?>>
            <?php
                $args=array('post_type'=>'videopost');
                $countt =new WP_Query($args);
                    while($countt->have_posts()):$countt->the_post()
            ?>
            <div class="box">
                <div class="image fit">
                    <?php
				if(has_post_thumbnail()){
				    the_post_thumbnail("thumbnail","class=>'image'");
				}
                   ?></div>
                <div class="inner">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                    <a href="<?php
                            $button_url = get_post_meta(get_the_ID() , 'buttonurl', true);
                            echo wp_kses_post($button_url);
                        ?>" class="button style2 fit" data-poptrox="youtube,800x400">
                        <?php
                        $button = get_post_meta(get_the_ID() , 'button', true);
                        echo wp_kses_post($button);
                    ?></a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
