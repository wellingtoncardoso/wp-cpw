<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage CPW
 * @since CPW 1.0
 */

get_header();
?>
    <main id="primary" class="site-main">
        <?php 
            while( heve_posts() ) : the_post();
                get_template_part( 'template-parts/content' );

                if( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            endwhile;
        ?>
    </main>
<?php 
get_sidebar();
get_footer();?>