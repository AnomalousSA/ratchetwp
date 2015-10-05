<?php
/**
 * Template for 404 Page
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: May 14, 2015
 */
get_header(); ?>

    <header class="bar bar-nav">
        <h1 class="title">404</h1>
    </header>
    <div class="content-padded">
        <p><?php _e( 'Try searching, or one of the links below could help.', 'Ratchetwp' ); ?></p>
        <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo home_url( '/' ); ?>">Return to Home</a></p>
        <?php get_search_form(); ?>
        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
        <h2><?php _e( 'Categories', 'Ratchetwp' ); ?></h2>
            <ul>
                <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
            </ul>
    </div>
<?php get_footer(); ?>