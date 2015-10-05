<?php
/**
 * Template Name: Default Page
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: Sep 07, 2015
 */
global $childDir;
get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <header class="bar bar-nav">
        <h1 class="title"><?php the_title();?></h1>
    </header>
    <div class="content-padded">
        <?php if(function_exists('Ratchetwp_breadcrumbs')) Ratchetwp_breadcrumbs(); ?>
        <?php the_content();?>  
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>