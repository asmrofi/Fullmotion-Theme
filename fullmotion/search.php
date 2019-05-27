<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fullmotion
 */

get_header();
?>

<div id="main">
    <div class="inner">

        <?php if ( have_posts() ) : ?>

        <div class="inner">

            <!-- Boxes -->
            <div class="thumbnails" <?php post_class(); ?>>
                <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'fullmotion' ), '<span>' . get_search_query() . '</span>' );
					?>
            </div>
        </div>
        <?php
			/* Start the Loop */
			
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
