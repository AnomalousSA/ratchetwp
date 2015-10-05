<?php
/**
 * Description: Default Archive Page
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: Sep 30, 2015
 */
global $childDir;
get_header(); ?>
<?php if (have_posts() ) : ; ?>
    <header class="bar bar-nav">
        <h1 class="title">Search Results</h1>
    </header>
    <div class="content-padded">
        <h1><?php printf( __( 'Search Results for: %s', 'Ratchetwp' ), '<small>' . get_search_query() . '</small>' ); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
            <?php the_excerpt();?>
        <?php endwhile; ?> 
    </div>
<?php else: ?>
    <header class="bar bar-nav">
        <h1 class="title"><?php _e( 'No Results Found', 'Ratchetwp' ); ?></h1>
    </header>
    <div class="content-padded">
        <p><?php _e( 'Perhaps you should try again with a different search term.', 'Ratchetwp' ); ?></p>
        <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo home_url( '/' ); ?>">Return to Home</a></p>
        <?php get_search_form(); ?>
    </div>
<?php endif ;?>
<?php get_footer(); ?>