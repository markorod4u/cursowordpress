<?php
 /*
 Template Name: Pagina con sidebar
 */
?>

Este es un template personalizado

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<?php endwhile; ?>
<!-- post navigation --> 
 <h1><?php the_title(); ?></h1>
 <?php the_content(); ?>
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>