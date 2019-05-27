<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fullmotion
 */

get_header();
?>


<div id="main">
    <div class="inner">

        <!-- Boxes -->

        <div<?php post_class(); ?>>
            <?php
				while ( have_posts() ) :
				the_post();  
			?>
            <a href="<?php the_permalink(); ?>" class="image fit">
                <?php
					if(has_post_thumbnail()){
					the_post_thumbnail("thumbnail","class=>'image'");
						}
				?>
            </a>
            <div class="inner">
                <h3>
                    <?php the_title(); ?>
                </h3>
                <p><?php the_content();?></p>
            </div>
    </div>
    <?php endwhile; ?>
    <?php get_search_form(); ?>
    <?php
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		?>

</div>
</div>

<?php 
get_sidebar();
get_footer();
?>
