<?php
/**
 * Default Post Template
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: Sep 30, 2015
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
        <header class="bar bar-nav">
        <h1 class="title"><?php the_title();?></h1>
        </header>
        <div class="content-padded">
            <?php if(function_exists('Ratchetwp_breadcrumbs')) Ratchetwp_breadcrumbs(); ?>
            <p class="meta"><?php echo Ratchetwp_posted_on();?></p>
                <?php the_content();?>
                <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
                <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Ratchetwp' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        ) );
                ?>
                <?php endwhile; ?>
                <?php comments_template(); ?>
                <?php Ratchetwp_content_nav('nav-below');?> 
        </div>
<?php get_footer(); ?>