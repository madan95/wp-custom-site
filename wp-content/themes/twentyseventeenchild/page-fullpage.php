<?php
/* Template Name: No Header or Footer (Plain Page) Full page Template */

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'fullpage' );


                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();

?>