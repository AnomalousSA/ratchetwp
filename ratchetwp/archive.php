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
<?php if (have_posts() ) ; ?>
        <header class="bar bar-nav">
            <h1 class="title">
                <?php
                
                
                if ( is_day() ) {
                    printf( __( 'Daily Archives: %s', 'Ratchetwp' ), '<small>' . get_the_date() . '</small>' );
                } elseif ( is_month() ) {
                    printf( __( 'Monthly Archives: %s', 'Ratchetwp' ), '<small>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'Ratchetwp' ) ) . '</small>' );
                } elseif ( is_year() ) {
                    printf( __( 'Yearly Archives: %s', 'Ratchetwp' ), '<small>' . get_the_date( _x( 'Y', 'yearly archives date format', 'Ratchetwp' ) ) . '</span>' );
                } elseif ( is_tag() ) {
                    printf( __( 'Tag Archives: %s', 'Ratchetwp' ), '<small>' . single_tag_title( '', false ) . '</small>' );
                            // Show an optional tag description
                    $tag_description = tag_description();
                    if ( $tag_description )
                        echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
                } elseif ( is_category() ) {
                    printf( __( 'Category Archives: %s', 'Ratchetwp' ), '<small>' . single_cat_title( '', false ) . '</small>' );
                    $category_description = category_description();
                    if ( $category_description )
                        echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
                } else {
                    _e( 'Blog Archives', 'Ratchetwp' );
                }
                ?>
            </h1>
        </header>
    <div class="content-padded">
        <?php if(function_exists('Ratchetwp_breadcrumbs')) Ratchetwp_breadcrumbs(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                <?php the_excerpt();?>
            </div>
        <?php endwhile; ?> 
    </div>
<?php get_footer(); ?>