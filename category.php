<?php get_header(); ?>

	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</header>

	<section>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <article class="articulo">
		   		<h2><?php the_author(); ?></h2>
		   		<strong><?php the_date(); ?></strong>
		   		<?php the_excerpt(); ?>
		   </article>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		  <p>No existen elementos con esa categoria</p>
		<?php endif; ?>
	</section>


<?php get_footer("nuevo"); ?>